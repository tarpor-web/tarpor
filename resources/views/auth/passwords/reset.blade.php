@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-gray-800/80 backdrop-blur-lg border border-gray-700 p-10 rounded-2xl shadow-2xl transition-all hover:-translate-y-1">

            <!-- Header with Icon -->
            <div class="text-center space-y-3 mb-8">
                <div class="flex justify-center">
                    <div class="p-3 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-full shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-center text-transparent bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text">
                    Reset Password
                </h2>
                <p class="text-gray-400 text-sm">OTP sent to <span class="font-semibold text-gray-300">{{ session('password_reset_email') }}</span></p>
            </div>

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="mt-4 mb-6 p-3 bg-red-700/30 border border-red-600 rounded-lg text-red-400 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Reset Password Form -->
            <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
                @csrf
                <input type="hidden" name="email" value="{{ session('password_reset_email') }}">

                <!-- OTP Input -->
                <div class="mb-6">
                    <label class="text-gray-300 text-sm font-medium">OTP Code</label>
                    <input type="text" name="otp" required maxlength="6"
                           placeholder="★ ★ ★ ★ ★ ★"
                           pattern="\d{6}"
                           class="w-full px-4 py-3 mt-1 bg-gray-700/50 border border-gray-600 rounded-lg text-center text-2xl space-x-2 placeholder:tracking-widest tracking-[2rem] text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
                           oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.setCustomValidity(this.validity.patternMismatch ? 'Please enter exactly 6 digits.' : '')" />
                    @error('otp')
                    <span class="text-red-400 text-sm mt-2">{{ $errors->first('otp') }}</span>
                    @enderror
                </div>

                <!-- Resend OTP Button with Countdown -->
                <div class="flex justify-center text-center mb-6">
                        <button type="submit" id="resend-otp-button" disabled
                                class="text-purple-400 hover:text-purple-300 transition cursor-not-allowed font-medium flex items-center justify-center space-x-1">
                            <i class="fa-sharp fa-solid fa-repeat"></i> &nbsp;
                            <span id="resend-text">Resend OTP (<span id="countdown">60</span>s)</span>
                        </button>
                </div>

                <!-- New Password -->
                <div class="mb-6">
                    <label class="text-gray-300 text-sm font-medium">New Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                               class="w-full px-4 py-3 mt-1 bg-gray-700/50 border border-gray-600 rounded-lg text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
                               placeholder="Enter your password">
                        <span id="toggle-password" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                            <i class="fa-solid fa-eye-slash text-gray-400"></i>
                        </span>
                    </div>
                    <div id="password-requirements" class="mt-2 text-sm text-gray-400 hidden">
                        <ul>
                            <li id="uppercase" class="text-red-400">At least one uppercase letter</li>
                            <li id="lowercase" class="text-red-400">At least one lowercase letter</li>
                            <li id="number" class="text-red-400">At least one number</li>
                            <li id="special" class="text-red-400">At least one special character</li>
                            <li id="length" class="text-red-400">At least 8 characters</li>
                        </ul>
                    </div>
                    @error('password')
                    <span class="text-red-400 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label class="text-gray-300 text-sm font-medium">Confirm Password</label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                               class="w-full px-4 py-3 mt-1 bg-gray-700/50 border border-gray-600 rounded-lg text-gray-100 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
                               placeholder="Confirm your password">
                        <span id="toggle-confirm-password" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                            <i class="fa-solid fa-eye-slash text-gray-400"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                    <span class="text-red-400 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button with Icon -->
                <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all transform hover:-translate-y-0.5 shadow-lg hover:shadow-purple-900/30 flex items-center justify-center space-x-2">
                    <i class="fa-solid fa-rotate-right"></i>
                    <span>Reset Password</span>
                </button>
            </form>

            <form id="resend-otp-form" method="POST" action="{{ route('password.resend') }}">
                @csrf
                <input type="hidden" name="email" value="{{ session('password_reset_email') }}">
{{--                <input type="hidden" name="type" value="password-reset">--}}
            </form>
        </div>
    </div>

    <script>
        // OTP Countdown Timer
        let countdown = 60;
        const countdownElement = document.getElementById('countdown');
        const resendButton = document.getElementById('resend-otp-button');

        const interval = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;
            if (countdown <= 0) {
                clearInterval(interval);
                resendButton.disabled = false;
                resendButton.classList.remove('cursor-not-allowed');
                document.getElementById('resend-text').textContent = 'Resend OTP';
            }
        }, 1000);

        // Form Submission
        const resendForm = document.getElementById('resend-otp-form');
        resendButton.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default action for button
            resendForm.submit(); // Submit the form manually
        });

        // Password Validation
        const passwordInput = document.getElementById('password');
        const passwordRequirements = document.getElementById('password-requirements');
        const requirements = {
            uppercase: /[A-Z]/,
            lowercase: /[a-z]/,
            number: /[0-9]/,
            special: /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/,
            length: /.{8,}/
        };

        passwordInput.addEventListener('input', () => {
            const password = passwordInput.value;
            passwordRequirements.classList.remove('hidden');
            let allConditionsMet = true;

            Object.keys(requirements).forEach(key => {
                const requirementMet = requirements[key].test(password);
                document.getElementById(key).style.color = requirementMet ? 'green' : 'red';
                if (!requirementMet) allConditionsMet = false;
            });

            // Hide validation if all conditions are met
            if (allConditionsMet) {
                passwordRequirements.classList.add('hidden');
            }
        });

        // Toggle Password Visibility Function
        const togglePassword = (inputId, toggleId) => {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId);
            const icon = toggle.querySelector('i');

            toggle.addEventListener('click', () => {
                if (!input.value) {
                    input.setAttribute('placeholder', 'Please input password first');
                    return;
                }

                // Check if the input type is 'password' or 'text'
                const isPassword = input.getAttribute('type') === 'password';

                // Set input type to 'text' to show password, or 'password' to hide it
                input.setAttribute('type', isPassword ? 'text' : 'password');

                // Toggle the icon classes
                icon.classList.toggle('fa-eye', isPassword);  // Show eye icon (password is hidden)
                icon.classList.toggle('fa-eye-slash', !isPassword); // Show slash eye icon (password is shown)

                // Auto-hide password after 3 seconds
                setTimeout(() => {
                    if (input.getAttribute('type') === 'text') {
                        input.setAttribute('type', 'password');
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    }
                }, 3000);  // After 3 seconds, hide password and show closed eye icon
            });
        };


        togglePassword('password', 'toggle-password');
        togglePassword('password_confirmation', 'toggle-confirm-password');
    </script>
@endsection
