<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtp;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Generate and send OTP
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->firstOrFail();

        // Check if user exists and not a guest
        if (!$user || $user->role === 'guest') {
            return back()->with('error', 'Invalid email address');
        }

        // Generate OTP

        $otp = random_int(100000, 999999);
        $user->update([
            'otp_code' => Hash::make($otp),
            'otp_expires_at' => now()->addMinutes(15)
        ]);

        // Send OTP via email
        Mail::to($user->email)->queue(new SendOtp($otp));

        return redirect()->route('verify.otp.form')->with([
            'email' => $user->email,
            'success' => 'OTP sent to your email!'
        ]);
    }

    // Resend OTP
    public function resendOtp(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $validated['email'])->firstOrFail();

        // Check OTP resend cooldown
        if ($user->otp_expires_at && $user->otp_expires_at->gt(now()->subSeconds(60))) {
            $cooldown = $user->otp_expires_at->diffInSeconds(now()->subSeconds(60));
            return back()->with('error', "Please wait {$cooldown} seconds before resending");
        }

        // Generate secure OTP
        $otp = random_int(100000, 999999);

        DB::transaction(function () use ($user, $otp) {
            $user->update([
                'otp_code' => Hash::make($otp),
                'otp_expires_at' => now()->addMinutes(15)
            ]);
        });

        // Queue OTP email
        Mail::to($user->email)->queue(new SendOtp($otp));

        return back()->with('success', 'New verification code sent! Check your email');
    }

    // Show OTP verification form
    public function showVerifyOtpForm()
    {
        return view('auth.verify-otp');
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {

        $request->validate([
            'otp_code' => 'required|string|size:6',
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $request->email)
            ->where('otp_expires_at', '>', now())
            ->first();

        if ($user && Hash::check($request->otp_code, $user->otp_code)) {
            Auth::login($user);
            $user->update([
                'otp_code' => null,
                'otp_expires_at' => null,
                'is_verified' => true,
            ]);

            return redirect()->intended($this->redirectTo());
        }

        return back()->with('error', 'Invalid OTP or OTP expired');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // Redirect based on role
    protected function redirectTo()
    {
        $role = Auth::user()->role;

        return match($role) {
            'super' => '/super/dashboard',
            'admin' => '/admin/dashboard',
            'user' => '/dashboard',
            default => '/'
        };
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:11'
        ]);
        $otp_code = random_int(100000, 999999);
        // Create user but mark as unverified
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone,
            'role' => 'user', // Default role
            'otp_code' => Hash::make($otp_code),
            'otp_expires_at' => now()->addMinutes(15),
        ]);

        // Send OTP email
        Mail::to($user->email)->queue(new SendOtp($otp_code));

        // Log in the user temporarily
        Auth::login($user);

        // ✅ Store email in session
        session()->put('email', $user->email);

        return redirect()->route('verify.otp.form')->with([
            'success' => 'OTP sent to your email! Please verify to continue.'
        ]);
    }

    private function sendSmsOtp($phone, $otp)
    {
        // Implement your SMS gateway logic here
        // Example using Twilio:
        /*
        $twilio = new \Twilio\Rest\Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );

        $twilio->messages->create(
            $phone,
            [
                'from' => config('services.twilio.from'),
                'body' => "Your OTP code is: $otp"
            ]
        );
        */
    }
}
