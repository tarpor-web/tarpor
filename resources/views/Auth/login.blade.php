@extends('layouts.app')

@section('title', 'Login - TARPOR | Secure User Authentication')
@section('meta_title', 'Login - TARPOR | Secure User Authentication')
@section('description', 'Access your TARPOR account securely. Log in with your credentials to explore our features.')


@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-gray-800/90 backdrop-blur-lg rounded-3xl shadow-2xl border border-gray-700 p-10 transition-all duration-300 hover:shadow-3xl hover:-translate-y-1">
            <!-- Header Section -->
            <div class="text-center">
                <div class="mx-auto mb-4 flex justify-center">
                    <div class="p-3 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-lg shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text text-transparent">
                    Secure Access
                </h2>
                <p class="mt-2 text-sm text-gray-400">
                    Enter your email to receive a secure OTP
                </p>
            </div>

            <!-- Error Message -->
            @if (session('error'))
                <div class="rounded-lg bg-red-900/30 p-4 border border-red-800/50">
                    <div class="flex items-center space-x-3">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-sm font-medium text-red-300">{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            <!-- Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('send.otp') }}">
                @csrf

                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-md font-medium text-gray-300 mb-2">Email address</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            required
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100 transition-all duration-200"
                            placeholder="name@company.com"
                        >
                        @error('email')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:-translate-y-0.5 shadow-lg hover:shadow-purple-900/30 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span>Send Secure OTP</span>
                </button>
            </form>

            <!-- Footer Links -->
            <div class="mt-8 pt-6 border-t border-gray-700/50">
                <div class="text-center text-sm">
                    <p class="text-gray-400">
                        Need an account?
                        <a href="{{ route('register') }}" class="font-medium text-purple-400 hover:text-purple-300 transition-colors duration-200">
                            Create one now
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
