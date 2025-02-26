<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


// Guest Dashboard (If truly for unauthenticated users)
Route::get('/guest/dashboard', function () {
    return view('dashboard.guest');
})->middleware('role:guest');


// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
//    Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');
//    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');
    Route::post('/resend-password-reset-otp', [AuthController::class, 'resendPasswordResetOtp'])->name('password.resend');
    // Register Routes
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

    // Password Reset Routes
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendPasswordResetOtp'])->name('password.email');
    Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

    // Social Media Login Routes
    Route::get('/login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/login/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);

    Route::get('/login/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('/login/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);
});

// OTP Verification (Authenticated but unverified users)
Route::middleware('auth')->group(function () {
    Route::get('/verify-otp', [AuthController::class, 'showVerifyOtpForm'])->name('verify.otp.form');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');
    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Authenticated + Verified users)
Route::middleware(['auth', 'verified', 'auto.logout'])->group(function () {
    // Dashboards
    Route::get('/super/dashboard', function () {
        return view('dashboard.super');
    })->middleware('role:super')->name('super.dashboard'); // Named route for super dashboard

    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin.index');
    })->middleware('role:admin')->name('admin.dashboard'); // Named route for admin dashboard

    Route::get('/dashboard', function () {
        return view('dashboard.user.index');
    })->middleware('role:user')->name('user.dashboard'); // Named route for user dashboard

    // Change PasswordS
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change.form');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('password.change');
});
