<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');
    Route::get('/verify-otp', [AuthController::class, 'showVerifyOtpForm'])->name('verify.otp.form');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');

    // Register Routes
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware('auth')->group(function () {
    // Super Admin Dashboard
    Route::get('/super/dashboard', function () {
        return view('dashboard.super');
    })->middleware('role:super');

    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    })->middleware('role:admin');

    // User Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.user');
    })->middleware('role:user');

    // Guest Dashboard (if needed)
    Route::get('/guest/dashboard', function () {
        return view('dashboard.guest');
    });
});
