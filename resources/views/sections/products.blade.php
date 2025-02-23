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
