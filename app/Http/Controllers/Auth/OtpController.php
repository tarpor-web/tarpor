<?php
//
//use App\Http\Controllers\Controller;
//use App\Models\User;
//use App\Traits\OtpHandler;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//
//class OtpController extends Controller
//{
//    use OtpHandler;
//
//    public function requestOtp(Request $request)
//    {
//        $request->validate(['email' => 'required|email']);
//
//        $user = User::where('email', $request->email)->first();
//
//        if (!$user || $user->role === 'guest') {
//            return back()->withErrors(['email' => 'Invalid credentials']);
//        }
//
//        $otp = $this->generateOtp($user);
//        $this->sendEmailOtp($user, $otp);
//
//        return redirect()->route('otp.verify')->with('email', $request->email);
//    }
//
//    public function verifyOtp(Request $request)
//    {
//        $request->validate(['otp' => 'required|digits:6']);
//
//        $user = User::where('email', $request->email)
//            ->where('otp_code', $request->otp)
//            ->where('otp_expires_at', '>', now())
//            ->first();
//
//        if ($user) {
//            auth()->login($user);
//            $user->update(['otp_code' => null, 'otp_expires_at' => null]);
//
//            return redirect()->intended(
//                match($user->role) {
//                    'super' => route('super.dashboard'),
//                    'admin' => route('admin.dashboard'),
//                    'user' => route('user.dashboard'),
//                    default => route('login')
//                }
//            );
//        }
//
//        return back()->withErrors(['otp' => 'Invalid OTP']);
//    }
//}
