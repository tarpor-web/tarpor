@extends('layouts.app')

@section('title', 'Register - TARPOR | Secure User Authentication')
@section('meta_title', 'Register - TARPOR | Secure User Authentication')
@section('description', 'Register to TARPOR securely and explore our features.')
@push('styles')
    <style>
        /* Hide the default password toggle icon in Edge and other browsers */
        input[type="password"]::-ms-reveal,
        input[type="password"]::-webkit-reveal {
            display: none;
        }
    </style>
@endpush
@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-800 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-gray-800/90 backdrop-blur-lg rounded-3xl shadow-2xl border border-gray-700 p-10 transition-all duration-300 hover:shadow-3xl hover:-translate-y-1">

            <!-- Header -->
            <div class="text-center">
                <div class="mx-auto mb-4 flex justify-center">
                    <div class="p-3 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-lg shadow-lg">
                        <i class="fa-solid fa-user-plus text-white text-2xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text text-transparent">
                    Create Account
                </h2>
                <p class="mt-2 text-sm text-gray-400">Register to access our secure platform</p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="rounded-lg bg-red-900/30 p-4 border border-red-800/50">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-triangle-exclamation text-red-400"></i>
                        <span class="text-sm font-medium text-red-300">Please fix the following errors</span>
                    </div>
                </div>
            @endif

            <!-- Registration Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="w-full px-4 py-3 text-sm bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100"
                               placeholder="Mehedi Hasan">
                        @error('name')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-3 text-sm bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100"
                               placeholder="example@mail.com">
                        @error('email')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Mobile Number</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required
                               class="w-full px-4 py-3 text-sm bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100"
                               placeholder="017XXXXXXXX" maxlength="11" oninput="validatePhoneNumber()">
                        @error('phone')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" required
                                   class="w-full px-4 py-3 text-sm bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100"
                                   placeholder="Enter Your Password">
                            <button id="toggle-password" type="button"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-950 hover:text-purple-300 transition-colors duration-200">
                                <x-icon name="icon-eye" class="h-7 w-7" />
                            </button>
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" required
                                   class="w-full px-4 py-3 text-sm bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100"
                                   placeholder="Confirm Your Password">
                            <button id="toggle-confirm-password" type="button"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-950 hover:text-purple-300 transition-colors duration-200">
                                <x-icon name="icon-eye" class="h-7 w-7" />
                            </button>
                        </div>
                        @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all transform hover:-translate-y-0.5 shadow-lg flex items-center justify-center space-x-2 group">
                    <svg class="w-5 h-5 text-purple-200 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span class="transition-transform duration-200 group-hover:-translate-x-1">Register</span>
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-300 text-sm">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-medium text-purple-400 hover:text-purple-300 transition-colors duration-200">
                        Log In
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection

@push('footer-scripts')
    <!-- Password Toggle Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.querySelector("input[name='password']");
            const confirmPasswordInput = document.querySelector("input[name='password_confirmation']");
            const toggleButton = document.getElementById("toggle-password");
            const toggleConfirmButton = document.getElementById("toggle-confirm-password");
            // Phone number validation
            const phoneInput = document.getElementById("phone");
            phoneInput.addEventListener("input", validatePhoneNumber);

            // Initially hide the eye icon
            toggleButton.style.display = "none";
            toggleConfirmButton.style.display = "none";

            // Show the eye icon when typing in the password field
            passwordInput.addEventListener("input", function () {
                toggleButton.style.display = passwordInput.value.length > 0 ? "flex" : "none";
            });

            confirmPasswordInput.addEventListener("input", function () {
                toggleConfirmButton.style.display = confirmPasswordInput.value.length > 0 ? "flex" : "none";
            });

            // Toggle password visibility on click
            toggleButton.addEventListener("click", function () {
                const toggleIcon = toggleButton.querySelector("svg");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    toggleIcon.innerHTML = `<x-icon name="icon-eye-slash" />`; // Change to hide icon

                    // Automatically revert to hidden after 3 seconds
                    setTimeout(() => {
                        passwordInput.type = "password";
                        toggleIcon.innerHTML = `<x-icon name="icon-eye" />`; // Change back to show icon
                    }, 3000);
                } else {
                    passwordInput.type = "password";
                    toggleIcon.innerHTML = `<x-icon name="icon-eye" />`; // Change back to show icon
                }
            });

            toggleConfirmButton.addEventListener("click", function () {
                const toggleIcon = toggleConfirmButton.querySelector("svg");

                if (confirmPasswordInput.type === "password") {
                    confirmPasswordInput.type = "text";
                    toggleIcon.innerHTML = `<x-icon name="icon-eye-slash" />`; // Change to hide icon

                    // Automatically revert to hidden after 3 seconds
                    setTimeout(() => {
                        confirmPasswordInput.type = "password";
                        toggleIcon.innerHTML = `<x-icon name="icon-eye" />`; // Change back to show icon
                    }, 3000);
                } else {
                    confirmPasswordInput.type = "password";
                    toggleIcon.innerHTML = `<x-icon name="icon-eye" />`; // Change back to show icon
                }
            });

            // Validate Phone Number
            function validatePhoneNumber() {
                const phoneInput = document.getElementById("phone");
                const errorMessage = document.getElementById("phone-error");

                phoneInput.value = phoneInput.value.replace(/\D/g, "");
            }
        });
    </script>
@endpush
