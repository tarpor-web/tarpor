<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Admin Dashboard | TARPOR</title>

    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-gray-100" x-data="{ isSidebarCollapsed: false, openNotifications: false, openProfileDropdown: false, openSubmenu: null }">
<!-- Top Bar -->
<div class="fixed top-0 left-0 right-0 bg-gray-950 shadow-md z-50 h-16">
        <div class="w-full mx-auto md:mx-2">
            <div class="flex items-center justify-between md:px-2 h-16 relative">
                <!-- Logo (Left) -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('logos/logo.svg') }}" alt="Logo" class="h-auto lg:h-8 w-32 md:w-auto">
                </div>

                <!-- Search Bar (Middle) - Always centered on larger screens -->
                <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 w-full max-w-2xl">
                    <input
                        type="text"
                        placeholder="Search products, orders, customers..."
                        class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    />
                </div>

                <!-- Profile and Notifications (Right) -->
                <div class="flex items-center space-x-2 lg:space-x-6">
                    <!-- Search Icon for Mobile -->
                    <div class="md:hidden" x-data="{ openSearch: false }">
                        <button @click="openSearch = !openSearch" class="text-gray-400 hover:text-white focus:outline-none">
                            <i class="fas fa-search lg:text-lg"></i>
                        </button>

                        <!-- Mobile Search Bar -->
                        <div x-show="openSearch" class="absolute top-full left-0 w-full bg-gray-900 p-2 shadow-md">
                            <input
                                type="text"
                                placeholder="Search..."
                                class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            />
                        </div>
                    </div>
                    <!-- Notifications -->
                    <div class="relative">
                        <!-- Notification Bell Icon with Badge -->
                        <button
                            @click="openNotifications = !openNotifications"
                            class="relative text-gray-400 hover:text-white focus:outline-none transition-colors duration-200"
                        >
                            <!-- Bell Icon -->
                            <i class="fas fa-bell lg:text-xl"></i>
                            <!-- Notification Count Badge -->
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1 lg:px-2 py-1 transform translate-x-1/2 -translate-y-1/2">
                                3
                            </span>
                        </button>

                        <!-- Notifications Dropdown -->
                        <div
                            x-show="openNotifications"
                            @click.away="openNotifications = false"
                            class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg z-50 overflow-hidden transform origin-top-right transition-transform duration-200"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                        >
                            <!-- Dropdown Header -->
                            <div class="p-4 border-b border-gray-200 bg-gray-50">
                                <h3 class="text-lg font-semibold text-gray-800">Notifications</h3>
                            </div>

                            <!-- Dropdown List -->
                            <ul class="divide-y divide-gray-200">
                                <!-- Notification Item 1 -->
                                <li class="px-4 py-3 hover:bg-gray-300 transition-colors duration-200">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-shopping-cart text-blue-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">New order received</p>
                                            <p class="text-xs text-gray-500">2 minutes ago</p>
                                        </div>
                                    </a>
                                </li>

                                <!-- Notification Item 2 -->
                                <li class="px-4 py-3 hover:bg-gray-300 transition-colors duration-200">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-exclamation-triangle text-yellow-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">Product out of stock</p>
                                            <p class="text-xs text-gray-500">10 minutes ago</p>
                                        </div>
                                    </a>
                                </li>

                                <!-- Notification Item 3 -->
                                <li class="px-4 py-3 hover:bg-gray-300 transition-colors duration-200">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-user-plus text-green-500"></i>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">New customer registered</p>
                                            <p class="text-xs text-gray-500">1 hour ago</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdown Footer -->
                            <div class="p-4 border-t border-gray-200 bg-gray-50">
                                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">View all notifications</a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Dropdown -->
                    <div class="relative">
                        <button @click="openProfileDropdown = !openProfileDropdown" class="flex items-center text-gray-400 hover:text-white focus:outline-none">
                            <img src="{{ asset('logos/tblue.svg') }}" alt="Profile" class="h-8 w-8 rounded-full">
                            <i class="fas fa-chevron-down lg:ml-1 text-xs"></i>
                        </button>
                        <!-- Profile Dropdown Menu -->
                        <div x-show="openProfileDropdown" @click.away="openProfileDropdown = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50 overflow-hidden">
                            <ul class="py-2">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-300 transition-colors duration-200">
                                        <i class="fas fa-user-circle mr-2"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-300 transition-colors duration-200">
                                        <i class="fas fa-cog mr-2"></i> Settings
                                    </a>
                                </li>
                                <li class="border-t border-gray-200">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-300 transition-colors duration-200">
                                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Floating Hamburger Menu for Mobile -->
                    <div class="md:hidden">
                        <button @click="isSidebarCollapsed = !isSidebarCollapsed" class="text-gray-400 hover:text-white focus:outline-none">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Main Content -->
<div class="flex flex-col w-full mx-auto md:flex-row min-h-full pt-16 over">
    <!-- Left Sidebar -->
    <div class="flex flex-col w-full mx-auto md:flex-row min-h-full" x-data="{ openSubmenu: null, isSidebarCollapsed: false }">
        <!-- Left Side Navigation Bar -->
        @include('partials.sidebars.admin-sidebar')

    <!-- Right Side Content -->
    @yield('page-content')
    </div>
</div>
<!-- Footer -->
<footer class="bg-gray-950 text-white w-full overflow-hidden">
    <div class="mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <img src="{{ asset('logos/logo.svg') }}" alt="TARPOR Logo" class="h-8 mb-4">
                <p class="text-gray-400 text-sm leading-relaxed">
                    Empowering businesses with intelligent solutions. Providing seamless administration and analytics for optimized operations.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-gray-300 uppercase font-semibold mb-3">Company</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-400 transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-300 uppercase font-semibold mb-3">Resources</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">FAQs</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-gray-300 uppercase font-semibold mb-3">Legal</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-colors">Security</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Media -->
            <div class="flex flex-col md:items-end">
                <h3 class="text-gray-300 uppercase font-semibold mb-3">Follow Us</h3>
                <div class="flex space-x-4 flex-wrap">
                    <a href="#" aria-label="Facebook" class="text-gray-400 hover:text-blue-500 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="text-gray-400 hover:text-sky-500 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="text-gray-400 hover:text-red-500 transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-pink-500 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="text-gray-400 hover:text-blue-700 transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-8 border-t border-gray-700 pt-6 flex flex-col md:flex-row md:justify-between text-center md:text-left">
            <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} TARPOR. All Rights Reserved.</p>
            <div class="text-gray-400 text-sm">
                <a href="#" class="hover:text-gray-300 transition-colors">Privacy Policy</a> |
                <a href="#" class="hover:text-gray-300 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>


    @include('partials.toast')
    @stack('scripts')
</body>
</html>
