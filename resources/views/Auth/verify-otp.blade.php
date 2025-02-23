@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-gray-800/90 backdrop-blur-lg rounded-3xl shadow-2xl border border-gray-700 p-10 transition-all duration-300 hover:shadow-3xl hover:-translate-y-1">
            <!-- Header Section -->
            <div class="text-center">
                <div class="mx-auto mb-4 flex justify-center">
                    <div class="p-3 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-lg shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text text-transparent">
                    Verify OTP
                </h2>
                <p class="mt-2 text-sm text-gray-400">
                    Check your email for the 6-digit code
                </p>
            </div>

            <!-- Messages Section -->
            @if(session('success'))
                <div class="p-4 bg-green-800/30 border border-green-600 rounded-lg text-green-400 text-sm animate-fade-in">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="p-4 bg-red-800/30 border border-red-600 rounded-lg text-red-400 text-sm animate-fade-in">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Verification Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('verify.otp') }}">
                @csrf
                <input type="hidden" name="email" value="{{ session('email') }}">

                <div class="space-y-4">
                    <div>
                        <label class="block text-md font-medium text-gray-300 mb-2">6-Digit OTP Code</label>
                        <input
                            id="otp_code"
                            type="text"
                            name="otp_code"
                            required
                            autofocus
                            maxlength="6"
                            class="w-full px-4 py-3 text-xl bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100 transition-all duration-200 text-center tracking-[.5em] uppercase"
                            placeholder="••••••"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,6)"
                        >
                        @error('otp_code')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all duration-200 transform hover:-translate-y-0.5 shadow-lg hover:shadow-purple-900/30 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Verify Code</span>
                </button>
            </form>

            <!-- Resend OTP Section -->
            <div class="text-center pt-6 border-t border-gray-700/50">
                <p class="text-sm text-gray-400 mb-3">Didn't receive the code?</p>
                <button type="button" id="resend-button"
                        class="group relative inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-purple-600/30 to-indigo-600/30 border border-purple-500/50 rounded-xl font-medium text-purple-300 hover:text-white transition-all duration-300
                disabled:opacity-50 disabled:cursor-not-allowed disabled:pointer-events-none
                hover:border-purple-400 hover:from-purple-600/50 hover:to-indigo-600/50
                hover:shadow-lg hover:shadow-purple-900/20"
                        disabled>
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2 group-hover:animate-spin-fast" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    <span>Resend OTP </span>
                    <span id="countdown" class="ml-1">(60s)</span>
                </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl opacity-0 group-hover:opacity-10 transition-opacity duration-300"></span>
                </button>
            </div>

            <!-- Hidden Resend Form -->
            <form id="resend-otp-form" method="POST" action="{{ route('resend.otp') }}">
                @csrf
                <input type="hidden" name="email" value="{{ session('email') }}">
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const resendButton = document.getElementById('resend-button');
            let countdown = 60;
            let timer = null;

            // Update button state
            const updateButtonState = (disabled) => {
                resendButton.disabled = disabled;
                if(disabled) {
                    resendButton.classList.add('opacity-50', 'cursor-not-allowed');
                    resendButton.classList.remove('hover:shadow-lg', 'hover:border-purple-400');
                } else {
                    resendButton.classList.remove('opacity-50', 'cursor-not-allowed');
                    resendButton.classList.add('hover:shadow-lg', 'hover:border-purple-400');
                    document.getElementById('countdown').textContent = '';
                }
            }

            // Start countdown timer
            const startCountdown = () => {
                if(timer) clearInterval(timer);
                countdown = 60;
                updateButtonState(true);

                timer = setInterval(() => {
                    countdown--;
                    document.getElementById('countdown').textContent = `(${countdown}s)`;

                    if(countdown <= 0) {
                        clearInterval(timer);
                        updateButtonState(false);
                    }
                }, 1000);
            }

            // Initial countdown if email exists
            @if(session('email')) startCountdown(); @endif

            // Resend button click handler
            resendButton.addEventListener('click', () => {
                startCountdown();
                document.getElementById('resend-otp-form').submit();
            });
        });
    </script>

    <style>
        @keyframes spin-fast {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-fast {
            animation: spin-fast 0.8s linear infinite;
        }

        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    </style>
@endsection
