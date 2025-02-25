<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google Callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('dashboard'); // Redirect to dashboard after login
    }

    // Redirect to Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Handle Facebook Callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->registerOrLoginUser($user);

        return redirect()->route('dashboard'); // Redirect to dashboard after login
    }

    // Register or Login User
    protected function registerOrLoginUser($socialUser)
    {
        $user = User::where('email', $socialUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                'email' => $socialUser->getEmail(),
                'provider_id' => $socialUser->getId(),
                'provider' => $socialUser->getProvider(),
                'role' => 'user', // Default role for social media users
            ]);
        }

        Auth::login($user, true); // Log in the user and remember them

        // Redirect based on user role
        if ($user->role === 'super') {
            return redirect()->intended('/super/dashboard');
        } elseif ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->intended('/dashboard');
        }
    }
}
