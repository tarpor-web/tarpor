@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-gray-800/90 backdrop-blur-lg rounded-3xl shadow-xl border border-gray-700 p-10 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">

            <!-- Icon Section -->
            <div class="mx-auto flex justify-center">
                <div class="p-4 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-full shadow-lg animate-pulse">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </svg>
                </div>
            </div>

            <!-- Header Section -->
            <h2 class="text-3xl font-semibold text-center text-transparent bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text">
                Reset Your Password
            </h2>
            <p class="text-sm text-gray-400 text-center">Enter your email to receive a reset code</p>

            <!-- Session Messages -->
            @if(session('status'))
                <div class="p-4 bg-green-800/30 border border-green-600 rounded-lg text-green-400 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            @if(session('error'))
                <div class="p-4 bg-red-800/30 border border-red-600 rounded-lg text-red-400 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Reset Password Form -->
            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-md font-medium text-gray-300 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required autofocus
                           class="w-full px-4 py-3 text-lg bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100 transition-all duration-200"
                           placeholder="your@email.com">
                    @error('email')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:-translate-y-0.5 shadow-lg hover:shadow-purple-900/30 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3 3L22 4"/>
                    </svg>
                    <span>Send Reset OTP</span>
                </button>
            </form>

            <!-- Back to Login Link -->
            <div class="text-center pt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-white transition-all">
                    <span class="inline-block transform transition-transform hover:scale-105">
                        <i class="fa-solid fa-left-long"></i> &nbsp;
                    </span> Back to Login
                </a>
            </div>
        </div>
    </div>
@endsection
