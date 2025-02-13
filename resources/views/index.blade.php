<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="TARPOR | Shop Online, Save Time!">
    <meta name="keywords" content="Online Shopping, Best Deals, Electronics, Fashion, Home Goods">
    <meta name="description" content="Shop online at TARPOR for the best deals on electronics, fashion, home goods, and more. Enjoy fast shipping, secure payment, and excellent customer service.">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="TARPOR | Online Shopping in BD | Shop Online, Save Time">
    <meta property="og:description" content="Shop online at TARPOR for the best deals on electronics, fashion, home goods, and more. Enjoy fast shipping, secure payment, and excellent customer service.">
    <meta property="og:image" content="{{ asset( '/assets/logos/logo.svg') }}">
    <meta property="og:url" content="https://www.tarpor.com">
    <meta property="og:type" content="website">

    <!-- Title -->
    <title>TARPOR | Online Shopping in BD | Shop Online, Save Time</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.tarpor.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/logos/favicon.ico') }}" type="image/png">

    <!-- Include Tailwind CSS  -->
    @vite(['resources/css/app.css'])

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('/font/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">


    <!-- Structured Data for Local Business -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "TARPOR",
            "url": "https://www.tarpor.com/",
            "logo": "{{ asset('/logos/logo.svg') }}",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Uttara",
                "addressLocality": "Dhaka",
                "addressRegion": "Dhaka",
                "addressCountry": "Bangladesh",
                "postalCode": "1230"
            },
            "telephone": "+8801551805527",
            "priceRange": "$"
        }
    </script>

    <!-- Structured Data for Search Box -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://www.tarpor.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.tarpor.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-XXXXXX' + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXX');
    </script>
    <!-- End Google Tag Manager -->

</head>
<body class="bg-gray-100 text-gray-900">
<div class="w-full max-w-none mt-0">
    <header class="text-center">
        <!-- Top Menu (Desktop Only) -->
        <nav class="hidden lg:block bg-gray-950 text-white">
            <div class="container mx-auto px-4 pt-2">
                <ul class="flex justify-center md:justify-center space-x-4">
                    <!-- Phone -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="tel:01551805527">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="fas fa-phone text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">0155 1805527</span>
                        </a>
                    </li>

                    <!-- Email -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="mailto:info@tarpor.com">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="far fa-envelope text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">info@tarpor.com</span>
                        </a>
                    </li>

                    <!-- Offers -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="https://www.tarpor.com/offers">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="fas fa-box-open text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">Offers</span>
                        </a>
                    </li>

                    <!-- Big Sale -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="https://www.tarpor.com/all-discount-products">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="fas fa-cart-plus text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">Big Sale</span>
                        </a>
                    </li>

                    <!-- New Arrival -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="https://www.tarpor.com/new-arrival-products">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="fab fa-sith text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">New Arrival</span>
                        </a>
                    </li>

                    <!-- Trouble -->
                    <li class="flex items-center">
                        <a class="flex items-center space-x-2" href="https://www.tarpor.com/trouble">
                            <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                                <i class="fas fa-wrench text-white group-hover:text-lime-500 text-xs"></i>
                            </div>
                            <span class="text-sm">Trouble</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Middle Menu -->
        <nav class="bg-gray-950 text-white sticky top-0 py-0 z-10">
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
                <div class="w-1/3 lg:w-3/12  pt-2 md:pt-0 flex justify-start">
                    <a href="https://www.tarpor.com">
                        <img src="{{ asset('/logos/logo.svg') }}" alt="TARPOR" class="w-24 h-auto">
                    </a>
                </div>

                <!-- Search Box (Centered) -->
                <div class="w-6/12 lg:w-6/12 px-4 py-2 hidden lg:flex relative">
                    <form class="w-full flex items-center">
                        <input type="search" id="user-search-box" class="w-full px-4 py-2 bg-gray-50 text-gray-900 rounded-full border border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-16" autocomplete="off" placeholder="Enter Your Keyword..." />
                        <button class="absolute right-0 top-0 bottom-0 bg-lime-500 text-white px-10 py-0 my-2 mr-4 rounded-r-full" type="submit" aria-label="Search" style="min-width: 40px;">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <!-- Search Results Dropdown -->
                    <div id="search-dropdown" class="absolute top-full left-0 right-0 mx-4 max-w-full bg-white shadow-md rounded-lg -mt-2 hidden overflow-hidden">
                        <ul id="search-results" class="py-2 mx-4 text-gray-900"></ul>
                    </div>
                </div>

                <!-- Cart, Wishlist, and User Account (Mobile and Desktop) -->
                <div class="w-1/3 lg:w-3/12 flex items-center justify-end space-x-2 lg:space-x-5 pt-4">
                    <!-- Search Button (Mobile Only) -->
                    <div class="relative group -mt-2 md:mt-0">
                        <button class="lg:hidden text-white cursor-pointer" id="toggle-search" aria-label="Search mobile button">
                            <i class="fas fa-search"></i>
                        </button>
                        <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            Search
                        </span>
                    </div>

                    <!-- Wishlist Button -->
                    <div class="relative group -mt-2 md:mt-0">
                        <a href="/wishlist" class="text-white hover:text-lime-500 relative">
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
                    <div class="relative group hidden md:block">
                        <button id="user-menu-button" class="text-white hover:text-lime-500 cursor-pointer" aria-label="User Account">
                            <i class="fas fa-user"></i>
                        </button>
                        <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            Account
                        </span>
                        <!-- Dropdown Menu -->
                        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Login</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pull-Down Search Box (Mobile Only) -->
            <div class="lg:hidden hidden mt-2 px-4 relative" id="mobile-search-box">
                <form class="w-full flex items-center relative">
                    <!-- Input Field -->
                    <input type="search" name="q" class="w-full px-4 py-2 bg-gray-50 text-gray-900 rounded-full border-1 border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-16" autocomplete="off" placeholder="Enter Your Keyword..." />
                    <!-- Search Button -->
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

        <!-- Bottom Navigation (Mobile Only) -->
        <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-gray-900 text-white shadow-md py-1 z-20">
            <ul class="flex justify-around items-center">
                <li class="text-center">
                    <a href="/offers" class="flex flex-col items-center text-white">
                        <i class="fas fa-box-open text-sm hover:text-lime-500 transition-colors"></i>
                        <span class="text-xs transition-colors">Offers</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="/all-discount-products" class="flex flex-col items-center text-white">
                        <i class="fas fa-cart-plus text-sm hover:text-lime-500 transition-colors"></i>
                        <span class="text-xs transition-colors">Big Sale</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="/compare" class="flex flex-col items-center text-white">
                        <i class="fas fa-exchange-alt text-sm hover:text-lime-500 transition-colors"></i>
                        <span class="text-xs transition-colors">Compare</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="/customers/login" class="flex flex-col items-center text-white">
                        <i class="fas fa-user-circle text-sm hover:text-lime-500 transition-colors"></i>
                        <span class="text-xs transition-colors">Account</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Navbar -->
        <!-- Navbar Container -->
        <nav class="bg-gray-950 text-white">
            <div class="container mx-auto px-4 pb-2 flex justify-between items-center">
                <!-- Desktop Menu -->
                <ul id="desktop-menu" class="hidden lg:flex space-x-6">
                    <li class="relative">
                        <a href="/home" class="font-bold hover:text-lime-300">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="#" class="lg:font-bold text-sm lg:text-md hover:text-lime-300">Laptop</a>
                        <ul class="dropdown absolute left-0 mt-2 w-48 lg:max-h-48 bg-gray-100 text-left text-gray-900 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 overflow-y-auto z-50">
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">Acer</a></li>
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">Apple</a></li>
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">Asus</a></li>
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">Asus</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="lg:font-bold text-sm lg:text-md hover:text-lime-300">Desktop & Server</a>
                        <ul class="dropdown absolute left-0 mt-2 w-48 lg:max-h-48 bg-gray-100 text-left text-gray-900 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 overflow-y-auto z-50">
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">All Desktop</a></li>
                            <li><a href="#" class="block lg:px-4 lg:py-2 hover:bg-gray-300">Gaming PC</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="lg:font-bold text-sm lg:text-md hover:text-lime-300">Software</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <section class="mt-2 lg:mt-3">
        <div class="container mx-auto px-2 md:px-4 lg:h-[500px] rounded-lg"> <!-- Increased height to 520px -->
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:h-full max-h-max gap-1"> <!-- Reduced gap to gap-1 -->
                <!-- Main Slider (Left Side) -->
                <div class="lg:col-span-8 col-span-12 h-full">
                    <div id="carousel" class="relative overflow-hidden rounded-lg h-full">
                        <!-- Slide Container -->
                        <div id="slide-container" class="flex transition-transform duration-500 ease-in-out h-full">
                            <!-- Slide 1 -->
                            <div class="slide min-w-full h-full" data-slideindex="0">
                                <a href="/dji-flip-drone-with-dji-rc-2-remote">
                                    <img
                                        src="{{ asset('uploads/slides/slide-1.webp') }}"
                                        alt="DJI Flip Drone"
                                        class="w-full h-full object-cover rounded-lg"
                                    />
                                </a>
                            </div>
                            <!-- Slide 2 -->
                            <div class="slide min-w-full h-full" data-slideindex="1">
                                <a href="/offers/falgun-fest">
                                    <img
                                        src="{{ asset('uploads/slides/slide-2.webp') }}"
                                        alt="Falgun Fest"
                                        class="w-full h-full object-cover rounded-lg"
                                    />
                                </a>
                            </div>
                        </div>

                        <!-- Slide Indicators -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                            <div class="slide-indicator w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></div>
                            <div class="slide-indicator w-3 h-3 bg-white rounded-full opacity-100 cursor-pointer"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Ads (Desktop) -->
                <div class="lg:col-span-4 col-span-12 hidden lg:block h-full">
                    <div class="flex flex-col h-full gap-1"> <!-- Reduced gap to gap-1 -->
                        <div class="flex-1 overflow-hidden rounded-lg">
                            <a href="/store/logitech">
                                <img
                                    src="{{ asset('uploads/ads/ad-1.webp') }}"
                                    alt="Logitech Surprise Discount"
                                    class="w-full h-full object-cover rounded-lg"
                                />
                            </a>
                        </div>
                        <div class="flex-1 overflow-hidden rounded-lg">
                            <a href="/hohem-mic-01-2tx-plus-1rx-microphone">
                                <img
                                    src="{{ asset('uploads/ads/ad-2.webp') }}"
                                    alt="Hohem MIC-01 (2TX + 1RX)"
                                    class="w-full h-full object-cover rounded-lg"
                                />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side Ads (Mobile) -->
                <div class="col-span-12 lg:hidden flex">
                    <div class="w-1/2 p-[0.8px]">
                        <a href="/store/logitech" class="block">
                            <img
                                src="{{ asset('uploads/ads/ad-1.webp') }}"
                                alt="Logitech Surprise Discount"
                                class="w-full h-auto rounded-lg block"
                            />
                        </a>
                    </div>

                    <div class="w-1/2 p-[0.8px]">
                        <a href="/hohem-mic-01-2tx-plus-1rx-microphone" class="block">
                            <img
                                src="{{ asset('uploads/ads/ad-2.webp') }}"
                                alt="Hohem MIC-01 (2TX + 1RX)"
                                class="w-full h-auto rounded-lg block"
                            />
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mt-8">
        <h2 class="text-2xl font-semibold mb-4">Section Title</h2>
        <p class="text-lg">Tailwind CSS provides utility-first classes to style your elements quickly.</p>
    </section>
</div>

<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
