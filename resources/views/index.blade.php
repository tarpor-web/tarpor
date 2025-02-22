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
    <meta name="robots" content="index, follow, max-image-preview:large">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="TARPOR | Online Shopping in BD | Shop Online, Save Time">
    <meta property="og:description" content="Shop online at TARPOR for the best deals on electronics, fashion, home goods, and more. Enjoy fast shipping, secure payment, and excellent customer service.">
    <meta property="og:image" content="{{ asset( '/assets/logos/logo.svg') }}">
    <meta property="og:url" content="https://www.tarpor.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tarporbd">

    <!-- Language -->
    <meta http-equiv="content-language" content="en-bd">
    <!-- Title -->
    <title>TARPOR | Online Shopping in BD | Shop Online, Save Time</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.tarpor.com{{ request()->getRequestUri() }}">

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
            "url": "https://tarpor.com",
            "priceRange": "৳৳",
            "logo": "{{ asset('/logos/logo.svg') }}",
            "openingHours": "Sa-Th 09:00-23:00"
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
            "url": "https://tarpor.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://tarpor.com/search?q={search_term_string}",
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
<body class="bg-gray-100 max-h-full overflow-x-hidden">
    <div id="scrollToTop" class="scroll-container fixed bottom-10 lg:bottom-6 right-2 lg:right-6 z-50 hidden bg-lime-500 p-2 rounded-lg shadow-lg transition-all duration-300 cursor-pointer opacity-0 hover:bg-gray-700 hover:shadow-2xl">
        <i class="fa-solid fa-angles-up text-white text-2xl"></i>
    </div>


{{--    <header class="relative text-center">--}}

    <!-- Top Navigation (Desktop Only) -->
    <nav class="hidden lg:block bg-gray-950 text-white">
        <div class="container mx-auto px-4 pt-2">
            <ul class="flex justify-center md:justify-center space-x-4">
                <!-- Phone -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="tel:01551805527" aria-label="Call us">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="fas fa-phone text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">0155 1805527</span>
                    </a>
                </li>

                <!-- Email -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="mailto:info@tarpor.com" aria-label="Email us">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="far fa-envelope text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">info@tarpor.com</span>
                    </a>
                </li>

                <!-- Offers -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="/offers" aria-label="View offers">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="fas fa-box-open text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">Offers</span>
                    </a>
                </li>

                <!-- Big Sale -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="/all-discount-products" aria-label="View big sale">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="fas fa-cart-plus text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">Big Sale</span>
                    </a>
                </li>

                <!-- New Arrival -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="/new-arrival-products" aria-label="View new arrivals">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="fab fa-sith text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">New Arrival</span>
                    </a>
                </li>

                <!-- Trouble -->
                <li class="flex items-center">
                    <a class="flex items-center space-x-2" href="/trouble" aria-label="Get help">
                        <div class="group w-6 h-6 bg-transparent border-2 border-blue-500 hover:border-lime-500 rounded-full flex items-center justify-center p-1">
                            <i class="fas fa-wrench text-white group-hover:text-lime-500 text-xs"></i>
                        </div>
                        <span class="text-sm">Trouble</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

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
                <a href="https://www.tarpor.com" aria-label="Home">
                    <img src="{{ asset('/logos/logo.svg') }}" loading="lazy" alt="TARPOR" class="w-24 h-auto">
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
                <div class="relative group hidden md:block">
                    <a href="/login" class="text-white hover:text-lime-500 relative" aria-label="User Account">
                        <i class="fas fa-user"></i>
                    </a>
                    <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 text-xs text-black bg-lime-500 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                        Account
                    </span>
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

    <!-- Bottom Navigation (Mobile Only) -->
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-gray-900 text-white shadow-md py-1 z-20">
        <ul class="flex justify-around items-center">
            <li class="text-center">
                <a href="/offers" class="flex flex-col items-center text-white" aria-label="Offers">
                    <i class="fas fa-box-open text-sm hover:text-lime-500 transition-colors"></i>
                    <span class="text-xs transition-colors">Offers</span>
                </a>
            </li>
            <li class="text-center">
                <a href="/all-discount-products" class="flex flex-col items-center text-white" aria-label="Big Sale">
                    <i class="fas fa-cart-plus text-sm hover:text-lime-500 transition-colors"></i>
                    <span class="text-xs transition-colors">Big Sale</span>
                </a>
            </li>
            <li class="text-center">
                <a href="/compare" class="flex flex-col items-center text-white" aria-label="Compare">
                    <i class="fas fa-exchange-alt text-sm hover:text-lime-500 transition-colors"></i>
                    <span class="text-xs transition-colors">Compare</span>
                </a>
            </li>
            <li class="text-center">
                <a href="/customers/login" class="flex flex-col items-center text-white" aria-label="Account">
                    <i class="fas fa-user-circle text-sm hover:text-lime-500 transition-colors"></i>
                    <span class="text-xs transition-colors">Account</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Navbar Menu Container -->
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
{{--    </header>--}}

    <section class="sliders-ads mt-2 lg:mt-3">
        <div class="container mx-auto px-2 md:px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-1"> <!-- Constrain height -->
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
                                        loading="lazy"
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
                                        loading="lazy"
                                        alt="Falgun Fest"
                                        class="w-full h-full object-cover rounded-lg"
                                    />
                                </a>
                            </div>
                        </div>

                        <!-- Previous and Next Buttons -->
                        <button id="prev-button" class="absolute left-1 lg:left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-25 text-white p-3 rounded-full hover:bg-opacity-75 transition-opacity">
                            <i class="fa-solid fa-caret-left"></i>
                        </button>
                        <button id="next-button" class="absolute right-1 lg:right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-25 text-white p-3 rounded-full hover:bg-opacity-75 transition-opacity">
                            <i class="fa-solid fa-caret-right"></i>
                        </button>

                        <!-- Slide Indicators (Rectangular Tiles) -->
                        <div class="hidden md:flex absolute bottom-4 left-1/2 transform -translate-x-1/2 space-x-1">
                            <div class="slide-indicator w-12 h-1 my-4 bg-black opacity-80 cursor-pointer transition-opacity relative before:absolute before:-top-2 before:-bottom-2 before:-left-2 before:-right-2 before:content-['']" data-slideindex="0"></div>
                            <div class="slide-indicator w-12 h-1 my-4 bg-black opacity-80 cursor-pointer transition-opacity relative before:absolute before:-top-2 before:-bottom-2 before:-left-2 before:-right-2 before:content-['']" data-slideindex="1"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Ads (Desktop) -->
                <div class="lg:col-span-4 col-span-12 hidden lg:block h-full">
                    <div class="flex flex-col h-full gap-1">
                        <!-- Ad 1 -->
                        <div class="flex-1 overflow-hidden rounded-lg">
                            <a href="/store/logitech">
                                <img
                                    src="{{ asset('uploads/ads/ad-1.webp') }}"
                                    loading="lazy"
                                    alt="Logitech Surprise Discount"
                                    class="w-full h-full object-cover rounded-lg"
                                />
                            </a>
                        </div>
                        <!-- Ad 2 -->
                        <div class="flex-1 overflow-hidden rounded-lg">
                            <a href="/hohem-mic-01-2tx-plus-1rx-microphone">
                                <img
                                    src="{{ asset('uploads/ads/ad-2.webp') }}"
                                    loading="lazy"
                                    alt="Hohem MIC-01 (2TX + 1RX)"
                                    class="w-full h-full object-cover rounded-lg"
                                />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side Ads (Mobile) -->
                <div class="col-span-12 lg:hidden flex gap-1">
                    <!-- Ad 1 -->
                    <div class="w-1/2 overflow-hidden rounded-lg">
                        <a href="/store/logitech">
                            <img
                                src="{{ asset('uploads/ads/ad-1.webp') }}"
                                alt="Logitech Surprise Discount"
                                class="w-full h-full object-cover rounded-lg"
                            />
                        </a>
                    </div>
                    <!-- Ad 2 -->
                    <div class="w-1/2 overflow-hidden rounded-lg">
                        <a href="/hohem-mic-01-2tx-plus-1rx-microphone">
                            <img
                                src="{{ asset('uploads/ads/ad-2.webp') }}"
                                loading="lazy"
                                alt="Hohem MIC-01 (2TX + 1RX)"
                                class="w-full h-full object-cover rounded-lg"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features mt-2">
        <div class="hidden sm:block bg-gray-100 pt-2 pb-0">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center gap-4 text-sm md:text-base">
                    <!-- 0% EMI -->
                    <span class="font-bold no-underline flex items-center gap-2">
                    <i class="fas fa-money-bill-alt text-lime-500"></i>
                        0% EMI
                    </span>

                    <!-- Divider -->
                    <span class="text-gray-400 hidden md:block">|</span>

                    <!-- 24/7 Online Support -->
                    <span class="font-bold no-underline flex items-center gap-2">
                    <i class="fas fa-user-tie text-lime-500"></i>
                        24/7 Online Support
                    </span>

                    <!-- Divider -->
                    <span class="text-gray-400 hidden md:block">|</span>

                    <!-- No Charge on Card Payment -->
                    <span class="font-bold no-underline flex items-center gap-2">
                    <i class="fas fa-credit-card text-lime-500"></i>
                        Minimum charge on card payment
                    </span>

                    <!-- Divider -->
                    <span class="text-gray-400 hidden md:block">|</span>

                    <!-- Cash on Delivery in 64 Districts -->
                    <span class="font-bold no-underline flex items-center gap-2">
                        <i class="fas fa-truck text-lime-500"></i>
                        Cash on delivery
                    </span>
                </div>
            </div>
        </div>
        <!-- Mobile-Only Section -->
        <div class="lg:hidden mt-2">
            <div class="bg-gray-100 py-2 lg:py-6">
                <div class="container mx-auto px-2">
                    <div class="grid grid-cols-2 gap-2">
                        <!-- Support -->
                        <a href="tel:01551805527" class="group block h-10">
                            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-stretch h-full">
                                <!-- Icon Container (20% width, green background) -->
                                <div class="w-1/5 bg-lime-500 flex items-center justify-center rounded-l-lg">
                                    <i class="fas fa-phone text-white text-xl"></i>
                                </div>

                                <!-- Text Container (80% width) -->
                                <div class="w-4/5 p-2 flex items-center">
                                    <span class="font-bold text-gray-800">
                                        <h6 class="mb-0 text-xs">01551805537</h6>
                                    </span>
                                </div>
                            </div>
                        </a>

                        <!-- 24/7 Online Support -->
                        <div class="group block h-10">
                            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-stretch h-full">
                                <!-- Icon Container -->
                                <div class="w-1/5 bg-lime-500 flex items-center justify-center rounded-l-lg">
                                    <i class="fas fa-user-tie text-white text-xl"></i>
                                </div>

                                <!-- Text Container -->
                                <div class="w-4/5 p-2 flex items-center">
                                    <span class="font-bold text-gray-800">
                                        <h6 class="mb-0 text-xs">24/7 Online Support</h6>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- No Charge on Card Payment -->
                        <div class="group block h-10">
                            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-stretch h-full">
                                <!-- Icon Container -->
                                <div class="w-1/5 bg-lime-500 flex items-center justify-center rounded-l-lg">
                                    <i class="fas fa-credit-card text-white text-xl"></i>
                                </div>

                                <!-- Text Container -->
                                <div class="w-4/5 p-2 flex items-center">
                                    <span class="font-bold text-gray-800">
                                        <h6 class="mb-0 text-xs">Minimum charge on card payment</h6>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Cash on Delivery -->
                        <div class="group block h-10">
                            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 flex items-stretch h-full">
                                <!-- Icon Container -->
                                <div class="w-1/5 bg-lime-500 flex items-center justify-center rounded-l-lg">
                                    <i class="fas fa-truck text-white text-xl"></i>
                                </div>

                                <!-- Text Container -->
                                <div class="w-4/5 p-2 flex items-center">
                                    <span class="font-bold text-gray-800">
                                        <h6 class="mb-0 text-xs">Cash on delivery</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="categories">
        <!-- Header Section -->
        <div class="container mx-auto px-4 py-2 mb-2 lg:mb-6">
            <div class="row">
                <div class="col-lg-12 px-0 lg:px-2">
                    <div class="flex justify-between items-center border-b border-gray-300 pb-0">

                        <!-- "Top Categories" with a premium color scheme -->
                        <div class="relative flex items-center group">
                            <h6 class="relative text-xs md:text-base text-white font-semibold px-4 py-1 lg:py-2
                    bg-gradient-to-r from-[#2c3e50] to-[#34495e] transform skew-x-[-6deg]
                    rounded-lg shadow-md transition-all duration-300
                    hover:from-[#273746] hover:to-[#2c3e50] hover:shadow-gray-500/50">
                                <span class="inline-block transform skew-x-[6deg]">Top Categories</span>
                            </h6>
                        </div>

                        <!-- "See all categories" link with a gold hover effect -->
                        <!-- "See all categories" link with a professional blue hover effect -->
                        <a href="/categories"
                           class="relative text-xs md:text-base text-[#2C3E50] font-medium transition-all duration-300
                               hover:text-[#1A5276] after:content-[''] after:absolute after:left-0 after:bottom-0
                                   after:h-[2px] after:w-0 after:bg-[#2C3E50] after:transition-all after:duration-300
                                   hover:after:w-full">
                            See all categories →
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Products List -->
        <div class="container mx-auto px-2 lg:px-4">
            <ul class="flex justify-between overflow-x-auto space-x-2 lg:space-x-4 py-2 lg:py-4 scrollbar-hide">
                <!-- Product Item 1 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/laptop-all-laptop" class="text-center">
                        <img src="{{ asset('uploads/category-icon/Laptop.svg') }}" loading="lazy" alt="Laptop"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/laptop-all-laptop"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Laptop
                    </a>
                </li>

                <!-- Product Item 2 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/desktop-component-processor" class="text-center">
                        <img src="{{ asset('uploads/category-icon/Processor.svg') }}" loading="lazy" alt="Processor"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/desktop-component-processor"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Processor
                    </a>
                </li>

                <!-- Product Item 3 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/desktop-pc-all-in-one-pc" class="text-center">
                        <img src="{{ asset('uploads/category-icon/all-in-one.svg') }}" loading="lazy" alt="AIO PC"
                         class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/desktop-pc-all-in-one-pc"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        AIO PC
                    </a>
                </li>

                <!-- Product Item 4 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/audio-video-speaker" class="text-center">
                        <img src="{{ asset('uploads/category-icon/speaker.svg') }}" loading="lazy" alt="Speaker"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/audio-video-speaker"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Speaker
                    </a>
                </li>

                <!-- Product Item 5 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/monitor-all-monitor" class="text-center">
                        <img src="{{ asset('uploads/category-icon/Monitor.svg') }}" loading="lazy" alt="Monitor"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/monitor-all-monitor"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Monitor
                    </a>
                </li>

                <!-- Product Item 6 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/software" class="text-center">
                        <img src="{{ asset('uploads/category-icon/software.svg') }}" loading="lazy" alt="Software"
                                                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/software"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Software
                    </a>
                </li>

                <!-- Product Item 7 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/gaming" class="text-center">
                        <img src="{{ asset('uploads/category-icon/gaming.svg') }}" loading="lazy" alt="Gaming"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/gaming"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Gaming
                    </a>
                </li>

                <!-- Product Item 8 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/all-laser-and-ink-printer" class="text-center">
                        <img src="{{ asset('uploads/category-icon/printer.svg') }}" loading="lazy" alt="Printer"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/all-laser-and-ink-printer"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Printer
                    </a>
                </li>

                <!-- Product Item 9 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/desktop-component-graphics-card" class="text-center">
                        <img src="{{ asset('uploads/category-icon/GPU.svg') }}" loading="lazy" alt="GPU"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/desktop-component-graphics-card"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        GPU
                    </a>
                </li>

                <!-- Product Item 10 -->
                <li class="flex flex-col items-center group min-w-[60px] md:min-w-[80px] lg:min-w-[100px]">
                    <a href="/category/camera" class="text-center">
                        <img src="{{ asset('uploads/category-icon/camera.svg') }}" loading="lazy" alt="Camera"
                          class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6">
                    </a>
                    <a href="/category/camera"
                       class="text-center mt-0 lg:mt-2 text-xs sm:text-sm md:text-md text-gray-800 transition-all duration-300 group-hover:text-purple-600 group-hover:font-semibold">
                        Camera
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="products">
        <!-- Header Section -->
        <div class="container mx-auto px-4 py-2 mb-0 lg:mb-4">
            <div class="row">
                <div class="col-lg-12 px-0 lg:px-2">
                    <div class="flex justify-between items-center border-b border-gray-300 pb-0">

                        <!-- "Collections" with a premium color scheme -->
                        <div class="relative flex items-center group">
                            <h6 class="relative text-xs md:text-base text-white font-semibold px-4 py-1 lg:py-2
                    bg-gradient-to-r from-[#2c3e50] to-[#34495e] transform skew-x-[-6deg]
                    rounded-lg shadow-md transition-all duration-300
                    hover:from-[#273746] hover:to-[#2c3e50] hover:shadow-gray-500/50">
                                <span class="inline-block transform skew-x-[6deg]">Collections</span>
                            </h6>
                        </div>

                        <!-- "See all products" link with a gold hover effect -->
                        <a href="/products"
                           class="relative text-xs md:text-base text-[#2C3E50] font-medium transition-all duration-300
                           hover:text-[#1A5276] after:content-[''] after:absolute after:left-0 after:bottom-0
                               after:h-[2px] after:w-0 after:bg-[#2C3E50] after:transition-all after:duration-300
                               hover:after:w-full">
                            See all products →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-2 lg:px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 mx-auto gap-2">
                <!-- Drone -->
                <div class="card bg-white rounded-lg shadow-md hover:ring-2 overflow-visible relative group">
                    <div class="image-box relative overflow-hidden">
                        <!-- New Arrival Badge -->
                        <div class="absolute top-2 -right-5 lg:top-4 lg:-right-8 bg-yellow-500 text-black text-center text-[0.5rem] lg:text-xs font-bold px-4 sm:px-6 py-0.5 sm:py-1 rounded-lg transform rotate-45 shadow-lg z-10 group-hover:hidden overflow-hidden">
                            New Arrival
                        </div>

                        <!-- Default Image (Visible by default) -->
                        <img src="{{ asset('uploads/products/small/product-1.webp') }}"
                             loading="lazy"
                             class="w-full h-32 lg:h-48 object-cover transform transition-all duration-300 group-hover:scale-110"
                             alt="Drone">

                        <!-- Hover Image (Hidden by default, shown on hover) -->
                        <img src="{{ asset('uploads/products/small/product-2.webp') }}"
                             loading="lazy"
                             class="w-full h-32 lg:h-48 object-cover absolute top-0 left-0 opacity-0 transform transition-all duration-300 group-hover:opacity-100 group-hover:scale-110"
                             alt="Drone">
                    </div>

                    <div class="card-buttons absolute top-2 right-2 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 overflow-visible">
                        <!-- Add to Cart Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-cart-arrow-down"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Add to Cart
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Compare Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-exchange-alt"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Compare
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Add to Wishlist Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-heart"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Add to Wishlist
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Quick View Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-eye"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Quick View
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>
                    </div>

                    <div class="card-body p-2 lg:p-4 text-center">
                        <!-- Product Title -->
                        <a href="#" class="text-md lg:text-lg font-semibold text-black lg:text-blue-600 hover:text-blue-800 transition-colors duration-300">
                            Drone
                        </a>
                        <!-- Product Description -->
                        <p class="text-sm lg:text-md text-gray-600 mt-1 lg:mt-2 leading-tight lg:leading-normal">
                            DII Neo Fly Mace Combo Drone with DII RC API R
                        </p>
                        <!-- Product Price -->
                        <p class="text-xl font-bold text-gray-800 mt-2 lg:mt-3">
                            Tk 50,000
                        </p>
                        <!-- Discount or Offer -->
                        <p class="text-xs lg:text-sm text-green-600 mt-1 lg:mt-2">
                            Save Tk 2,500 on online order
                        </p>
                    </div>
                </div>
                <!-- Drone -->
                <div class="card bg-white rounded-lg shadow-md hover:ring-2 overflow-visible relative group">
                    <div class="image-box relative overflow-hidden">
                        <!-- New Arrival Badge -->
                        <div class="absolute top-2 -right-5 lg:top-4 lg:-right-8 bg-yellow-500 text-black text-center text-[0.5rem] lg:text-xs font-bold px-4 sm:px-6 py-0.5 sm:py-1 rounded-lg transform rotate-45 shadow-lg z-10 group-hover:hidden overflow-hidden">
                            New Arrival
                        </div>

                        <!-- Default Image (Visible by default) -->
                        <img src="{{ asset('uploads/products/small/product-1.webp') }}"
                             loading="lazy"
                             class="w-full h-32 lg:h-48 object-cover transform transition-all duration-300 group-hover:scale-110"
                             alt="Drone">

                        <!-- Hover Image (Hidden by default, shown on hover) -->
                        <img src="{{ asset('uploads/products/small/product-2.webp') }}"
                             loading="lazy"
                             class="w-full h-32 lg:h-48 object-cover absolute top-0 left-0 opacity-0 transform transition-all duration-300 group-hover:opacity-100 group-hover:scale-110"
                             alt="Drone">
                    </div>

                    <div class="card-buttons absolute top-2 right-2 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 overflow-visible">
                        <!-- Add to Cart Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-cart-arrow-down"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Add to Cart
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Compare Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-exchange-alt"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Compare
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Add to Wishlist Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-heart"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Add to Wishlist
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>

                        <!-- Quick View Button with Tooltip -->
                        <button class="btn btn-sm bg-white p-2 rounded-full shadow-md hover:bg-lime-500 hover:text-white relative group/tooltip">
                            <i class="fas fa-eye"></i>
                            <span class="tooltip-text absolute left-full ml-2 top-1/2 transform -translate-y-1/2 bg-black text-white text-xs rounded py-1 px-2 opacity-0 group-hover/tooltip:opacity-100 transition-opacity duration-300 z-20 whitespace-nowrap">
                                Quick View
                                <!-- Arrow for right-side tooltip -->
                                <span class="absolute -left-2 top-1/2 transform -translate-y-1/2 w-0 h-0 border-t-4 border-b-4 border-r-4 border-t-transparent border-b-transparent border-black"></span>
                            </span>
                        </button>
                    </div>

                    <div class="card-body p-2 lg:p-4 text-center">
                        <!-- Product Title -->
                        <a href="#" class="text-md lg:text-lg font-semibold text-black lg:text-blue-600 hover:text-blue-800 transition-colors duration-300">
                            Drone
                        </a>
                        <!-- Product Description -->
                        <p class="text-sm lg:text-md text-gray-600 mt-1 lg:mt-2 leading-tight lg:leading-normal">
                            DII Neo Fly Mace Combo Drone with DII RC API R
                        </p>
                        <!-- Product Price -->
                        <p class="text-xl font-bold text-gray-800 mt-2 lg:mt-3">
                            Tk 50,000
                        </p>
                        <!-- Discount or Offer -->
                        <p class="text-xs lg:text-sm text-green-600 mt-1 lg:mt-2">
                            Save Tk 2,500 on online order
                        </p>
                    </div>
                </div>
                <!-- Repeat for other products as needed -->
            </div>
        </div>
    </section>
    <section class="brands mt-4">
        <!-- Header Section -->
        <div class="container mx-auto px-4 py-2 mb-0 lg:mb-4">
            <div class="row">
                <div class="col-lg-12 px-0 lg:px-2">
                    <div class="flex justify-between items-center border-b border-gray-300 pb-0">

                        <!-- "Brands" with a premium color scheme -->
                        <div class="relative flex items-center group">
                            <h6 class="relative text-xs md:text-base text-white font-semibold px-4 py-1 lg:py-2 bg-gradient-to-r from-[#2c3e50] to-[#34495e] transform skew-x-[-6deg]
                    rounded-lg shadow-md transition-all duration-300 hover:from-[#273746] hover:to-[#2c3e50] hover:shadow-gray-500/50">
                                <span class="inline-block transform skew-x-[6deg]">Brands</span>
                            </h6>
                        </div>

                        <!-- "See all brands" link with a gold hover effect -->
                        <a href="/brands"
                           class="relative text-xs md:text-base text-[#2C3E50] font-medium transition-all duration-300 hover:text-[#1A5276] after:content-[''] after:absolute after:left-0 after:bottom-0
                               after:h-[2px] after:w-0 after:bg-[#2C3E50] after:transition-all after:duration-300 hover:after:w-full">
                            See all brands →
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="container mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 rounded-none shadow-lg">            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/apple" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-1.webp') }}" loading="lazy" alt="Apple" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">Apple</span>
                </a>
            </li>
            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/microsoft" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-2.webp') }}" loading="lazy" alt="Microsoft" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">Microsoft</span>
                </a>
            </li>
            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/hp" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-3.webp') }}" loading="lazy" alt="HP" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">HP</span>
                </a>
            </li>
            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/asus" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-4.webp') }}" loading="lazy" alt="Asus" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">Asus</span>
                </a>
            </li>
            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/dell" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-5.webp') }}" loading="lazy" alt="Dell" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">Dell</span>
                </a>
            </li>
            <li class="group relative flex flex-col items-center p-4 bg-white/10 backdrop-blur-md rounded-xl shadow-md transition-transform transform hover:scale-105 hover:shadow-xl">
                <a href="/brand/lenovo" class="flex flex-col items-center space-y-2">
                    <div class="w-16 h-16 flex items-center justify-center bg-white/20 rounded-full transition-all duration-300 group-hover:bg-white/30">
                        <img src="{{ asset('uploads/products/small/product-6.webp') }}" loading="lazy" alt="Lenovo" class="w-16 h-16 rounded-full object-fill">
                    </div>
                    <span class="text-center font-semibold text-white text-lg tracking-wide group-hover:text-lime-400">Lenovo</span>
                </a>
            </li>
        </ul>


    </section>
    <section class="bg-gray-50 pt-2 pb-6">
        <div class="container mx-auto">
                <!-- Main Heading (H1) -->
                <h1 class="text-lg text-left font-bold text-gray-900 px-4 mb-4">
                    TARPOR: Bangladesh's #1 Online Fashion Destination
                </h1>

                <!-- Introductory Paragraph -->
                <p class="text-base text-justify text-gray-700 px-4 mb-4" id="introParagraph">
                    Welcome to <strong class="font-semibold">TARPOR</strong>, Bangladesh’s premier online fashion destination, where style meets affordability. Discover a meticulously curated collection of high-quality apparel, footwear, accessories, and lifestyle products tailored to elevate your wardrobe. From everyday casual wear to sophisticated formal attire and statement pieces, Tarpor brings you the latest trends and timeless classics at unbeatable prices.
                    <span id="dots">...</span>
                    <span id="more" style="display:none;">
                    Experience seamless shopping with fast delivery, flexible payment options, and exceptional customer service. Whether you're dressing up for a special occasion or refreshing your everyday look, Tarpor is your go-to fashion hub for every style and season.
                </span>
                </p>
                <a href="javascript:void(0);" id="readMoreLink" class="text-blue-600 hover:underline float-right" onclick="toggleText()">Read More</a>

                <!-- The section content to be toggled -->
                <div id="extraContent" style="display:none;">
                    <!-- Key Benefits Section (H2) -->
                    <h2 class="text-lg font-bold text-gray-900 mb-6 px-4 text-left">Why Choose TARPOR?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 mb-8">
                        <!-- Subsection 1 (H3) -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Premium Fashion Experience</h3>
                            <ul class="text-base text-gray-700 space-y-2 text-left">
                                <li>✅ <strong>Affordable Prices:</strong> High-quality fashion for every budget</li>
                                <li>✅ <strong>Wide Range:</strong> Exclusive collections for men, women, and kids</li>
                                <li>✅ <strong>Fast Delivery:</strong> Free shipping across Bangladesh</li>
                                <li>✅ <strong>Flexible Payments:</strong> Cash on delivery, EMI, and card options</li>
                            </ul>
                        </div>

                        <!-- Subsection 2 (H3) -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Trusted Service</h3>
                            <ul class="text-base text-gray-700 space-y-2 text-left">
                                <li>🌟 <strong>100% Authentic:</strong> Genuine brands with quality assurance</li>
                                <li>🌟 <strong>Easy Returns:</strong> Hassle-free return and refund policy</li>
                                <li>🌟 <strong>24/7 Support:</strong> Dedicated customer service team ready to assist</li>
                                <li>🌟 <strong>Secure Shopping:</strong> Safe and encrypted transactions for peace of mind</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Collections Section (H2) -->
                    <h2 class="text-md font-bold text-gray-900 px-4 mb-4 text-left">Fashion for Every Occasion</h2>
                    <p class="text-base text-gray-700 px-4 mb-4 text-left">
                        From casual daywear to elegant evening outfits, Tarpor’s collections are designed to make you look and feel your best:
                    </p>
                    <ul class="text-base text-gray-700 list-inside px-4 mb-8 text-left">
                        <li>👗 <strong>Women’s Collection:</strong> Dresses, tops, skirts, and ethnic wear</li>
                        <li>👔 <strong>Men’s Collection:</strong> Shirts, trousers, blazers, and accessories</li>
                        <li>👶 <strong>Kids’ Collection:</strong> Stylish and comfortable clothing for children</li>
                    </ul>

                    <!-- Seasonal Collections (H2) -->
                    <h2 class="text-md font-bold text-gray-900 px-4 mb-4 text-left">Trending Now</h2>
                    <p class="text-base text-gray-700 px-4 mb-4 text-left">
                        Explore our most sought-after collections, updated weekly:
                    </p>
                    <ul class="text-base text-gray-700 list-inside px-4 mb-8 text-left">
                        <li>🌟 <strong>Summer Essentials:</strong> Lightweight fabrics and breathable designs</li>
                        <li>🌟 <strong>Office Wear:</strong> Professional looks with modern twists</li>
                        <li>🌟 <strong>Party Collection:</strong> Standout pieces for special occasions</li>
                    </ul>

                    <!-- Professional CTA Section -->
                    <div class="bg-slate-900 p-12 rounded-xl text-white text-center shadow-2xl mb-0">
                        <div class="max-w-2xl mx-auto">
                            <h2 class="text-4xl font-bold mb-6 tracking-tight text-gray-100">
                                Elevate Your Wardrobe with Timeless Style
                            </h2>

                            <p class="text-xl mb-8 text-gray-300 leading-relaxed">
                                Join 500,000+ discerning shoppers in Bangladesh who choose<br class="hidden md:block">
                                Tarpor for exceptional quality and curated fashion
                            </p>

                            <div class="flex justify-center space-x-4">
                                <a href="/shop" class="bg-emerald-600 text-white font-semibold py-4 px-10 rounded-lg hover:bg-emerald-700 transition-colors duration-300 flex items-center shadow-md hover:shadow-lg">
                                    <span>Discover Collections</span>
                                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-8 pt-6 border-t border-slate-700">
                                <div class="flex items-center justify-center space-x-3 text-sm text-slate-400">
                                    <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex items-center space-x-4">
                                    <span>Free Nationwide Shipping</span>
                                    <span class="text-slate-600">•</span>
                                    <span>5-Day Returns</span>
                                    <span class="text-slate-600">•</span>
                                    <span>Secure Checkout</span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script>
        function toggleText() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var linkText = document.getElementById("readMoreLink");
            var extraContent = document.getElementById("extraContent");

            if (moreText.style.display === "none") {
                // Show the extra content and more text
                moreText.style.display = "inline";
                dots.style.display = "none";
                linkText.innerHTML = "Read Less";
                extraContent.style.display = "block"; // Show all content
            } else {
                // Hide the extra content and revert to the initial state
                moreText.style.display = "none";
                dots.style.display = "inline";
                linkText.innerHTML = "Read More";
                extraContent.style.display = "none"; // Hide the additional content
            }
        }
    </script>



    <div class="footer bg-gray-950 px-2 md:px-8 pt-8 pb-6 lg:pb-1">
        <!-- Footer Section -->
        <div class="container mx-auto px-2 lg:px-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-0 md:gap-8 items-start">

                <!-- Footer Info Section (This will appear in both small and large screens) -->
                <div class="flex flex-col items-center col-span-2 lg:col-span-1 text-center lg:text-left">
                    <a href="" class="mx-auto py-2">
                        <img src="{{ asset('logos/logo.svg') }}" loading="lazy" alt="TARPOR" class="w-24 h-auto mx-auto" />
                    </a>
                    <div class="mt-2 flex space-x-4 px-2 py-2 justify-center lg:justify-start">
                        <a href="https://www.facebook.com/#" class="text-white hover:text-blue-600" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/#" class="text-white hover:text-blue-400" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com/#" class="text-white hover:text-red-600" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/#" class="text-white hover:text-pink-600" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://bd.linkedin.com/company/#" class="text-white hover:text-blue-700" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="mt-6 mb-10">
                        <a href="https://forms.gle/cs2dCCxfkaWqPBse6" class="bg-red-600 text-white py-2 px-4 rounded-full hover:bg-red-700" target="_blank" rel="noreferrer">
                            Complaint Box
                        </a>
                    </div>
                </div>

                <!-- Footer Links Section 1 (This will appear in small screens and large screens) -->
                <div class="text-left leading-5 border-r md:border-r-0 md:border-l border-white pr-4 pl-4 md:pl-4 w-full">
                    <ul class="space-y-2 text-white text-xs md:text-sm">
                        <li><a href="/page/about-us" class="hover:text-lime-500">About us</a></li>
                        <li><a href="/page/branches-and-pickup-points" class="hover:text-lime-500">Branches & Pickup Points</a></li>
                        <li><a href="/page/warranty" class="hover:text-lime-500">Warranty</a></li>
                        <li><a href="/page/repair-and-services" class="hover:text-lime-500">Repair and Services</a></li>
                        <li><a href="/page/emi-facility" class="hover:text-lime-500">EMI</a></li>
                        <li><a href="/glossary" class="hover:text-lime-500">Glossary</a></li>
                        <li><a href="/blog" class="hover:text-lime-500">Blog</a></li>
                        <li><a href="/trouble" class="lg:hidden hover:text-lime-500">Trouble</a></li>
                        <li><a href="/new-arrival-products" class="lg:hidden hover:text-lime-500">New Arrival</a></li>
                    </ul>
                </div>

                <!-- Footer Links Section 2 (This will appear in small screens and large screens) -->
                <div class="text-left leading-5 md:border-l border-white ml-4 pl-4 md:pl-4 w-full">
                    <ul class="space-y-2 text-white text-xs md:text-sm">
                        <li><a href="/page/order-procedure" class="hover:text-lime-500">Order Procedure</a></li>
                        <li><a href="/page/return-refund-cancelation" class="hover:text-lime-500">Return, Refund & Cancellation</a></li>
                        <li><a href="/page/payment-method" class="hover:text-lime-500">Payment Method</a></li>
                        <li><a href="/page/terms-conditions" class="hover:text-lime-500">Terms & Conditions</a></li>
                        <li><a href="/page/privacy-policy" class="hover:text-lime-500">Privacy Policy</a></li>
                        <li><a href="/page/cookie-policy" class="hover:text-lime-500">Cookie Policy</a></li>
                        <li><a href="/page/digital-ecom-2021" class="hover:text-lime-500">ডিজিটাল কমার্স নির্দেশিকা ২০২১</a></li>
                    </ul>
                </div>

                <!-- Footer Contact Section (This will appear in both small and large screens) -->
                <div class="flex flex-col items-center lg:items-start col-span-2 lg:col-span-1 text-center lg:text-left leading-5 lg:border-l border-white md:pl-4 mt-6 md:mt-0">
                    <ul class="text-white space-y-2">
                        <li class="text-lg font-semibold">Contact Us</li>
                    </ul>
                    <p class="text-gray-300 text-xs md:text-sm">
                        Head office <br> TARPOR ! Shop Online, Save Time! <br>
                        Uttara, Dhaka, 1230 <br>
                        <span class="lg:hidden"><i class="fa fa-envelope"></i> info@tarpor.com</span> <br>
                        <span class="flex justify-center lg:justify-start items-center">
                            <i class="fas fa-phone"></i>
                            <a href="tel:01551805527" class="text-white">&nbsp;01551805527</a>,
                        </span>
                        <i class="fab fa-whatsapp text-green-600"></i>
                        <a href="https://api.whatsapp.com/send?phone=#" class="text-white"> +# (Message only)</a><br>
                        <i class="fas fa-map-marker-alt text-red-600"></i>
                        Map Link: <a href="https://tinyurl.com/#" target="_blank" class="text-lime-500">https://tinyurl.com/#</a>
                    </p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="container mx-auto py-4 text-center text-gray-400">
                <div class="text-xs">Prices are subject to change without any prior notice.</div>
                <div class="text-xs pt-1">TARPOR © {{ date('Y') }} All Rights Reserved. Designed by TARPOR</div>
                <input type="hidden" name="today" value="{{ \Carbon\Carbon::now('Asia/Dhaka')->format('d-m-Y g:h a') }}">
            </div>
        </div>
    </div>

<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
