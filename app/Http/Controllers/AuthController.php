<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        // Check if user exists and not a guest
        if (!$user || $user->role === 'guest') {
            return back()->with('error', 'Invalid email address');
        }

        // Generate OTP
        // $otp = Str::random(6);
        $otp = rand(100000, 999999);
        $user->update([
            'otp_code' => $otp,
            'otp_expires_at' => now()->addMinutes(15)
        ]);

        // Send OTP via email
        Mail::to($user->email)->send(new SendOtp($otp));

        return redirect()->route('verify.otp.form')->with([
            'email' => $user->email,
            'success' => 'OTP sent to your email!'
        ]);
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
            'otp' => 'required|string|size:6',
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)
            ->where('otp_code', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if ($user) {
            Auth::login($user);
            $user->update(['otp_code' => null, 'otp_expires_at' => null]);

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

    public function register()
    {
        
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
