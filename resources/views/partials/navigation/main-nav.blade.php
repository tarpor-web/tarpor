<!-- Main Navigation -->
<nav class="bg-gray-950 text-white sticky top-0 py-2 lg:py-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Hamburger Menu (Mobile Only) -->
        <div class="lg:hidden w-1/6 pt-2 flex items-center">
            <button class="text-white" id="open-mobile-menu" aria-label="Open menu">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobile-menu" class="fixed inset-0 left-0 w-64 h-full bg-gray-950 text-white text-left p-4 transform -translate-x-full transition-transform duration-300 lg:hidden z-50">
            <button id="close-menu" class="absolute top-4 right-4 text-white text-2xl cursor-pointer">&times;</button>
            <ul id="mobile-menu-list" class="mt-8 space-y-2"></ul>
        </div>

        <!-- Logo -->
        <div class="w-1/3 lg:w-3/12 pt-2 md:pt-0 flex justify-start">
            <a href="{{ route('home') }}" aria-label="Home">
                <img src="{{ asset('/logos/logo.svg') }}" loading="lazy" alt="TARPOR" class="w-auto h-10">
            </a>
        </div>

        <!-- Search Box (Centered) -->
        <div class="w-6/12 lg:w-6/12 px-4 py-2 hidden lg:flex relative">
            <form class="w-full flex items-center" role="search">
                <input type="search" id="user-search-box" class="w-full px-4 py-2 bg-gray-50 text-gray-900 rounded-full border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-16" autocomplete="off" placeholder="Enter Your Keyword..." aria-label="Search products" />
                <button class="absolute right-0 top-0 bottom-0 bg-lime-500 text-white px-10 py-0 my-2 mr-4 rounded-r-full" type="submit" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <!-- Search Results Dropdown -->
            <div id="search-dropdown" class="absolute top-full left-0 right-0 mx-4 max-w-full bg-white shadow-md rounded-lg -mt-2 hidden overflow-hidden">
                <ul id="search-results" class="py-2 mx-4 text-gray-900"></ul>
            </div>
        </div>

        <!-- Cart, Wishlist, and User Account -->
        <div class="w-1/3 lg:w-3/12 flex items-center justify-end space-x-2 lg:space-x-5 pt-4">
            <!-- Search Button (Mobile Only) -->
            <div class="relative group -mt-2 md:mt-0">
                <button class="lg:hidden text-white cursor-pointer" id="toggle-search" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                      Search
                    </span>
            </div>

            <!-- Wishlist Button -->
            <div class="relative group -mt-2 md:mt-0">
                <a href="/wishlist" class="text-white hover:text-lime-500 relative" aria-label="Wishlist">
                    <i class="fas fa-heart"></i>
                    <span class="absolute -top-4 -right-4 bg-red-500 text-white text-xs rounded-full px-2 py-1">0</span>
                </a>
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                      Wishlist
                    </span>
            </div>

            <!-- Compare Button -->
            <div class="relative group -mt-2 md:mt-0">
                <button class="text-white hover:text-lime-500 cursor-pointer relative" aria-label="Compare">
                    <i class="fas fa-exchange-alt"></i>
                    <span class="absolute -top-4 -right-4 bg-red-500 text-white text-xs rounded-full px-2 py-1">0</span>
                </button>
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                      Compare
                    </span>
            </div>

            <!-- Cart Button -->
            <div class="relative group -mt-2 md:mt-0">
                <button class="text-white hover:text-lime-500 cursor-pointer relative" aria-label="Cart">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span class="absolute -top-4 -right-4 bg-red-500 text-white text-xs rounded-full px-2 py-1">0</span>
                </button>
                <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                      Cart
                    </span>
            </div>


            <!-- User Account Button (Desktop Only) -->
            <div class="relative group hidden md:block" x-data="{ open: false }">
                @auth
                    <!-- User Account Button -->
                    <button
                        @click="open = !open"
                        class="text-white hover:text-lime-500 relative focus:outline-none"
                        aria-label="User Account"
                    >
                        <i class="fas fa-user"></i>
                        <i class="fas fa-chevron-down ml-[0.5] text-xs transition-transform duration-200"
                           :class="{ 'rotate-180': open }"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        x-show="open"
                        @click.away="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50"
                        x-cloak
                    >
                        <!-- Dropdown Items -->
                        <ul class="py-2">
                            <!-- Dashboard -->
                            <li>
                                <a href="{{ route(Auth::user()->role == 'super' ? 'super.dashboard' : (Auth::user()->role == 'admin' ? 'admin.dashboard' : (Auth::user()->role == 'user' ? 'user.dashboard' : 'login'))) }}"
                                   class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fa-regular fa-rectangle-list mr-2"></i> Dashboard
                                </a>
                            </li>


                            <!-- Profile -->
                            <li>
                                <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fas fa-user-circle mr-2"></i> Profile
                                </a>
                            </li>

                            <!-- Orders -->
                            <li>
                                <a href="/orders" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fas fa-shopping-bag mr-2"></i> Orders
                                </a>
                            </li>

                            <!-- Wishlist -->
                            <li>
                                <a href="/wishlist" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fas fa-heart mr-2"></i> Wishlist
                                </a>
                            </li>

                            <!-- Settings -->
                            <li>
                                <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fas fa-cog mr-2"></i> Settings
                                </a>
                            </li>

                            <!-- Change Password -->
                            <li>
                                <a href="{{ route('password.change.form') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                    <i class="fa-solid fa-key mr-2"></i> Change Password
                                </a>
                            </li>

                            <!-- Divider -->
                            <li class="border-t border-gray-200"></li>

                            <!-- Logout -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 transition">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <!-- Tooltip -->
                    <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity truncate">
                        {{ Auth::user()->name }}
                    </span>
                @else
                    <!-- Login Link (for guest users) -->
                    <a href="{{ route('login') }}" class="text-white hover:text-lime-500 relative focus:outline-none">
                        <i class="fas fa-user"></i>
                    </a>
                    <!-- Tooltip -->
                    <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                        Account
                    </span>
                @endauth
            </div>

        </div>
    </div>

    <!-- Pull-Down Search Box (Mobile Only) -->
    <div class="lg:hidden hidden mt-2 px-4 relative" id="mobile-search-box">
        <form class="w-full flex items-center relative" role="search">
            <input type="search" name="q" class="w-full px-4 py-2 bg-gray-50 text-gray-900 rounded-full border-1 border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-16" autocomplete="off" placeholder="Enter Your Keyword..." aria-label="Search products" />
            <button class="absolute right-0 top-0 bottom-0 bg-lime-500 text-white px-6 rounded-r-full flex items-center justify-center" type="submit" aria-label="Search">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <!-- Mobile Search Results Dropdown -->
        <div id="mobile-search-dropdown" class="absolute top-full left-0 right-0 mx-4 max-w-full bg-white shadow-md rounded-lg -mt-1 hidden z-50 border border-gray-200 max-h-auto overflow-y-auto">
            <ul id="mobile-search-results" class="py-2 text-gray-900"></ul>
        </div>
    </div>
</nav>

<!-- Cart Sidebar -->
<div id="cart-sidebar" class="fixed inset-y-0 right-0 w-full sm:w-[80%] md:w-96 bg-white/90 backdrop-blur-xl shadow-2xl transform transition-transform duration-500 ease-in-out translate-x-full z-50 rounded-l-2xl">
    <!-- Header -->
    <div class="p-5 border-b bg-gradient-to-r from-gray-950 to-gray-800 text-white rounded-tl-2xl">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold flex items-center gap-2">
                <i class="fas fa-shopping-cart"></i> Cart (0)
            </h2>
            <button id="close-cart-sidebar" class="text-white hover:text-gray-300 transition">
                <i class="fas fa-times text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Cart Items -->
    <div class="p-5 space-y-6 flex flex-col h-full">
        <div id="cart-items" class="space-y-4 max-h-[300px] overflow-y-auto flex-grow">
            <div class="text-center text-gray-600">Your cart is empty! <br> Explore Our Products</div>
        </div>

        <!-- Subtotal & Checkout -->
        <div class="py-4 border-t">
            <div class="flex justify-between text-lg font-semibold text-gray-900">
                <span>Subtotal:</span>
                <span>Tk 0</span>
            </div>
        </div>
    </div>

    <!-- Fixed Bottom Buttons -->
    <div class="fixed bottom-0 w-full md:w-96 max-w-full bg-white p-4 border-t">
        <a href="https://www.tarpor.com/cart" class="block w-full bg-gray-950 text-white hover:text-black font-medium py-3 text-center rounded-lg hover:bg-lime-500 transition">
            View Cart
        </a>
    </div>
</div>
