@extends('layouts.app')

@push('styles')
    <style>
        /* Hide the default password toggle icon in Edge and other browsers */
        input[type="password"]::-ms-reveal,
        input[type="password"]::-webkit-reveal {
            display: none;
        }
        /* Particle Canvas Style */
        #particle-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        /* Smooth Gradient Text Animation with Six Color Transitions */
        .gradient-text {
            font-size: 8rem;
            font-weight: 800;
            text-transform: uppercase;
            background: linear-gradient(90deg, #0072ff, #FF416C, #6D4C41);
            background-size: 200% 200%;
            animation: gradient-animation 4s ease infinite;
            -webkit-background-clip: text;
            color: transparent;
        }

        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Centered Text and Button */
        .error-message {
            text-align: center;
            color: #ffffff;
            z-index: 1;
            position: relative;
            padding: 2rem;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #0072ff;
            color: white;
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #00c6ff;
            transform: translateY(-3px);
        }
        .max-w-md {
            transition: box-shadow 0.3s ease;
        }

        .max-w-md:hover {
            box-shadow: 0 0 20px rgba(128, 0, 128, 0.5);
        }

        .button:active {
            transform: translateY(1px);
        }

        /* Adjusted SVG Icon */
        .icon {
            fill: #0072ff;
            opacity: 0.5;
            width: 7rem;
            height: 7rem;
            margin-top: 1.5rem;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .rounded-lg {
            animation: fadeIn 0.5s ease;
        }

    </style>
@endpush

@section('title', 'Login | ' . strtoupper(config('app.name')))

@section('content')

<div class="relative min-h-screen flex items-center justify-center bg-gray-900 overflow-hidden">
    <!-- Particle canvas -->
    <div id="particle-canvas"></div>
        <div class="max-w-md w-full bg-gray-800/80 backdrop-blur-lg border border-gray-700 p-10 rounded-2xl shadow-2xl opacity-80 transition-all hover:-translate-y-1">
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
                        Welcome Back
                    </h2>
                    <p class="mt-2 text-sm text-gray-200">
                        Log in to your account to continue
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

                <!-- Login Form -->
                <form class="mt-8 space-y-6" method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="space-y-4">
                        <!-- Email Input -->
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
                                placeholder="Enter Your Email"
                            >
                            @error('email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label for="password" class="block text-md font-medium text-gray-300 mb-2">Password</label>
                            <div class="relative">
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    required
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 placeholder-gray-400 text-gray-100 transition-all duration-200"
                                    placeholder="Enter Your Password"
                                >
                                <button
                                    id="toggle-password"
                                    type="button"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-950 hover:text-purple-300 transition-colors duration-200"
                                    title="Toggle Password Visibility"
                                >
                                    <x-icon name="icon-eye" class="h-7 w-7" />
                                </button>
                            </div>
                            @error('password')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                id="remember_me"
                                name="remember"
                                type="checkbox"
                                class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-600 rounded bg-gray-700/50"
                            >
                            <label for="remember_me" class="ml-2 block text-sm text-gray-300">Remember me</label>
                        </div>
                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-purple-400 hover:text-purple-300 transition-colors duration-200">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all transform hover:-translate-y-0.5 shadow-lg flex items-center justify-center space-x-2 group">
                        <svg class="w-5 h-5 text-purple-200 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <span class="transition-transform duration-200 group-hover:-translate-x-1">Log In</span>
                    </button>
                </form>

                <!-- Social Media Login -->
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-700/50"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-gray-800/90 text-gray-200">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <!-- Google Login -->
                        <a href="{{ route('login.google') }}" class="w-full flex items-center justify-center px-4 py-2 bg-gray-700/50 border border-gray-600 rounded-lg hover:bg-gray-700 transition-all duration-200">
                        <span class="w-6 h-6">
                            <svg class="w-full h-full" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16" fill="#00ac47"/>
                                <path d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16" fill="#4285f4"/>
                                <path d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z" fill="#ffba00"/>
                                <polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374"/>
                                <path d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z" fill="#ea4435"/>
                                <polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626"/>
                                <path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4"/>
                            </svg>
                        </span>
                            <span class="ml-2 text-white">Google</span>
                        </a>


                        <!-- Facebook Login -->
                        <a href="{{ route('login.facebook') }}" class="w-full flex items-center justify-center px-4 py-2 bg-blue-700/60 border border-gray-600 rounded-lg hover:bg-blue-700 transition-all duration-200">
                        <span class="w-6 h-6">
                            <svg class="w-full h-full" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffffff" fill-rule="evenodd" d="M9.94474914,22 L9.94474914,13.1657526 L7,13.1657526 L7,9.48481614 L9.94474914,9.48481614 L9.94474914,6.54006699 C9.94474914,3.49740494 11.8713513,2 14.5856738,2 C15.8857805,2 17.0033128,2.09717672 17.3287076,2.13987558 L17.3287076,5.32020466 L15.4462767,5.32094085 C13.9702212,5.32094085 13.6256856,6.02252733 13.6256856,7.05171716 L13.6256856,9.48481614 L17.306622,9.48481614 L16.5704347,13.1657526 L13.6256856,13.1657526 L13.6845806,22"/>
                            </svg>
                        </span>
                            <span class="ml-2 text-white">Facebook</span>
                        </a>

                    </div>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-gray-300 text-sm">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-purple-400 hover:text-purple-300 transition-colors duration-200">
                            Register Now
                        </a>
                    </p>
                </div>
            </div>
        </div>

@endsection

@push('footer-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.getElementById("password");
            const toggleButton = document.getElementById("toggle-password");

            // Initially hide the eye icon
            toggleButton.style.display = "none";

            // Show the eye icon when typing in the password field
            passwordInput.addEventListener("input", function () {
                if (passwordInput.value.length > 0) {
                    toggleButton.style.display = "flex";
                } else {
                    toggleButton.style.display = "none";
                }
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
                    toggleIcon.innerHTML = `<x-icon name="icon-eye" />`; // Show eye icon
                }
            });

        // Professional geometric particle network for a unique and clean look
        (function () {
            class Particle {
                constructor(canvas, ctx, x, y, velocity) {
                    this.canvas = canvas;
                    this.ctx = ctx;
                    this.x = x;
                    this.y = y;
                    this.velocity = velocity;
                    this.size = Math.random() * 1 + 1;
                    this.color = 'rgba(0, 174, 255, 0.8)';
                    this.angle = Math.random() * Math.PI * 2;
                    this.opacity = 0; // Start with 0 opacity
                }

                update() {
                    this.x += this.velocity.x;
                    this.y += this.velocity.y;

                    // Fade in particles
                    if (this.opacity < 0.8) this.opacity += 0.01;

                    // Recycle particles when they go out of canvas
                    if (this.x > this.canvas.width) this.x = 0;
                    if (this.x < 0) this.x = this.canvas.width;
                    if (this.y > this.canvas.height) this.y = 0;
                    if (this.y < 0) this.y = this.canvas.height;
                }

                draw() {
                    this.ctx.beginPath();
                    this.ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    this.ctx.fillStyle = `rgba(0, 174, 255, ${this.opacity})`;
                    this.ctx.fill();
                }
            }

            class ParticleNetwork {
                constructor(container) {
                    this.container = container;
                    this.canvas = document.createElement('canvas');
                    this.container.appendChild(this.canvas);
                    this.ctx = this.canvas.getContext('2d');
                    this.particles = [];
                    this.velocity = 0.5;
                    this.numParticles = 300;

                    window.addEventListener('resize', () => this.setCanvasSize());
                    this.setCanvasSize();
                    this.createParticles();
                    this.animate();
                }

                setCanvasSize() {
                    this.canvas.width = window.innerWidth;
                    this.canvas.height = window.innerHeight;
                }

                createParticles() {
                    for (let i = 0; i < this.numParticles; i++) {
                        const x = Math.random() * this.canvas.width;
                        const y = Math.random() * this.canvas.height;
                        const velocity = {
                            x: (Math.random() - 0.5) * this.velocity,
                            y: (Math.random() - 0.5) * this.velocity
                        };
                        this.particles.push(new Particle(this.canvas, this.ctx, x, y, velocity));
                    }
                }

                animate() {
                    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

                    this.particles.forEach(particle => {
                        particle.update();
                        particle.draw();
                    });

                    requestAnimationFrame(this.animate.bind(this));
                }
            }

            // Initialize Particle Network
            const canvasDiv = document.getElementById('particle-canvas');
            new ParticleNetwork(canvasDiv);
        })();
        });
    </script>
@endpush
