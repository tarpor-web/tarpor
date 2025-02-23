<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Guest Dashboard (If truly for unauthenticated users)
Route::get('/guest/dashboard', function () {
    return view('dashboard.guest');
})->middleware('role:guest');

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');

    // Register Routes
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// OTP Verification (Authenticated but unverified users)
Route::middleware('auth')->group(function () {
    Route::get('/verify-otp', [AuthController::class, 'showVerifyOtpForm'])->name('verify.otp.form');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');
    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Authenticated + Verified users)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboards
    Route::get('/super/dashboard', function () {
        return view('dashboard.super');
    })->middleware('role:super');

    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    })->middleware('role:admin');

    Route::get('/dashboard', function () {
        return view('dashboard.user');
    })->middleware('role:user');

});
