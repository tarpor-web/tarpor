document.addEventListener("DOMContentLoaded", function () {
    // Sample Product Data (Can be replaced with API response)
    const sampleData = [
        {
            title: "Lenovo IdeaPad D330",
            link: "product-1",
            imageUrl: "{{ asset('uploads/products/thumbnail/product-1.webp') }}",
            description: "10.1 Inch HD IPS Touch Display Mineral Grey Laptop",
            price: "BDT 27,500",
            discount: "Save Tk 1,200"
        },
        {
            title: "HP Pavilion 14",
            link: "product-2",
            imageUrl: "{{ asset('uploads/products/thumbnail/product-2.webp') }}",
            description: "Intel Core i5, 8GB RAM, 512GB SSD",
            price: "BDT 48,000",
            discount: "Save Tk 2,000"
        },
        {
            title: "Samsung Galaxy S21",
            link: "product-3",
            imageUrl: "{{ asset('uploads/products/thumbnail/product-3.webp') }}",
            description: "6.2 Inch Dynamic AMOLED, 128GB Storage",
            price: "BDT 85,000",
            discount: "Save Tk 5,000"
        },
        {
            title: "Logitech Wireless Mouse",
            link: "product-4",
            imageUrl: "{{ asset('uploads/products/thumbnail/product-4.webp') }}",
            description: "Wireless Optical Mouse, Ergonomic Design",
            price: "BDT 1,500",
            discount: "Save Tk 200"
        }
    ];

    // Function to handle search for both desktop and mobile
    function handleSearch(searchBox, searchDropdown, searchResults) {
        const query = searchBox.value.toLowerCase();
        searchResults.innerHTML = "";

        if (query.length > 1) {
            const filteredResults = sampleData.filter(item =>
                item.title.toLowerCase().includes(query) || item.description.toLowerCase().includes(query)
            );

            if (filteredResults.length > 0) {
                searchDropdown.classList.remove("hidden");
                filteredResults.forEach(item => {
                    const li = document.createElement("li");
                    li.classList.add("px-2", "py-2", "border-b", "border-gray-300", "hover:bg-gray-100", "cursor-pointer");

                    // Build the search result item
                    li.innerHTML = `
                        <a href="${item.link}" class="flex items-center space-x-3 p-1 hover:bg-gray-50 transition-colors duration-200 rounded-lg">
                            <!-- Thumbnail -->
                            <span class="size-20 shrink-0 border border-lime-500 rounded-lg">
                                <img src="${item.imageUrl}" alt="${item.title}" class="w-full h-full object-cover rounded-md shadow-sm">
                            </span>

                            <!-- Text Content -->
                            <span class="flex-1 text-sm">
                                <div class="text-left">
                                    <span class="font-semibold text-gray-800 truncate">${item.title}</span>
                                    <span class="block text-xs text-gray-500 mt-1 truncate">${item.description}</span>
                                </div>
                                <div class="text-left mt-1">
                                    <span class="text-sm font-medium text-gray-900">${item.price}</span>
                                    <span class="text-xs text-green-500 block mt-0.5">${item.discount}</span>
                                </div>
                            </span>
                        </a>
                    `;

                    li.addEventListener("click", function () {
                        searchBox.value = item.title;
                        searchDropdown.classList.add("hidden");
                    });

                    searchResults.appendChild(li);
                });
            } else {
                searchDropdown.classList.remove("hidden");
                const li = document.createElement("li");
                li.classList.add("px-4", "py-2", "text-center", "text-gray-900", "bg-teal-50", "rounded-lg");
                li.textContent = "Nothing found";
                searchResults.appendChild(li);
            }
        } else {
            searchDropdown.classList.add("hidden");
        }
    }

    // Desktop Search Elements
    const searchBox = document.getElementById("user-search-box");
    const searchDropdown = document.getElementById("search-dropdown");
    const searchResults = document.getElementById("search-results");

    searchBox.addEventListener("input", function () {
        handleSearch(searchBox, searchDropdown, searchResults);
    });

    // Mobile Search Elements
    const mobileSearchBox = document.querySelector("#mobile-search-box input[type='search']");
    const mobileSearchDropdown = document.getElementById("mobile-search-dropdown");
    const mobileSearchResults = document.getElementById("mobile-search-results");

    mobileSearchBox.addEventListener("input", function () {
        handleSearch(mobileSearchBox, mobileSearchDropdown, mobileSearchResults);
    });

    // Hide dropdowns when clicking outside
    document.addEventListener("click", function (e) {
        if (!searchBox.contains(e.target) && !searchDropdown.contains(e.target)) {
            searchDropdown.classList.add("hidden");
        }

        if (!mobileSearchBox.contains(e.target) && !mobileSearchDropdown.contains(e.target)) {
            mobileSearchDropdown.classList.add("hidden");
        }
    });

    // Toggle Mobile Search Visibility
    document.getElementById('toggle-search').addEventListener('click', function () {
        const searchBox = document.getElementById('mobile-search-box');
        searchBox.classList.toggle('hidden');
    });




    // Cart Sidebar
    const cartSidebar = document.getElementById('cart-sidebar');
    const openCartButton = document.querySelector('[aria-label="Cart"]');
    const closeCartButton = document.getElementById('close-cart-sidebar');

    openCartButton.addEventListener('click', () => {
        cartSidebar.classList.remove('translate-x-full');
    });

    closeCartButton.addEventListener('click', () => {
        cartSidebar.classList.add('translate-x-full');
    });




    // Toggle User Dropdown
    document.getElementById('user-menu-button').addEventListener('click', function () {
        const dropdown = document.getElementById('user-dropdown');
        dropdown.classList.toggle('hidden');
    });




    // Mobile Menu Functionality
    const mobileMenu = document.getElementById("mobile-menu");
    const openMenuBtn = document.getElementById("open-mobile-menu");
    const closeMenuBtn = document.getElementById("close-menu");
    const mobileMenuList = document.getElementById("mobile-menu-list");
    const desktopMenu = document.getElementById("desktop-menu");

    // Clone desktop menu into mobile menu
    mobileMenuList.innerHTML = desktopMenu.innerHTML;

    // Modify each menu item
    mobileMenuList.querySelectorAll("li").forEach((menuItem) => {
        // Apply styles to list items Main Menu List
        // menuItem.className="";
        menuItem.classList.add(
            "border-b",
            "border-gray-700",
            "pb-2",
            "flex",
            "justify-between",
            "items-center",
            "cursor-pointer",
            "relative"
        );

        // Target child <li> elements inside dropdowns
        const childLis = menuItem.querySelectorAll(".dropdown li");
        childLis.forEach((childLi) => {
            // This is whet i see on DIV > LI
            childLi.classList.add(
                "py-1",
                "px-4",
                "border-b-[1px]",
                "border-lime-500",
                "bg-lime-200",
            );
        });

        let dropdown = menuItem.querySelector(".dropdown");
        if (dropdown) {
            // Remove desktop-only styles
            // dropdown.classList.remove(
            //     "absolute",
            //     "left-0",
            //     "mt-4",
            //     "opacity-0",
            //     "invisible",
            //     "group-hover:opacity-100",
            //     "group-hover:visible"
            // );
            dropdown.className = "";
            // Style dropdown for mobile and ensure it appears below li which is DIV > UL
            dropdown.classList.add(
                "hidden",
                "w-full",
                // "bg-gray-800",
                // "mt-1",
                // "rounded",
                // "px-2",
                // "border",
                // "border-dark",
                // "max-h-48",
                // "overflow-y-auto"
            );

            // Create a toggle button inside the <li>
            let toggleBtn = document.createElement("span");
            toggleBtn.textContent = "+";
            toggleBtn.classList.add("text-white", "text-lg", "font-bold", "ml-auto");

            // Create a wrapper to place dropdown BELOW the li
            let dropdownWrapper = document.createElement("div");
            dropdownWrapper.classList.add("w-full"); // Ensures full width
            dropdownWrapper.appendChild(dropdown);
            menuItem.after(dropdownWrapper); // Places it BELOW li

            menuItem.appendChild(toggleBtn);

            // Click the entire li to toggle the dropdown
            menuItem.addEventListener("click", function (e) {
                // Prevent clicks inside dropdown from toggling it again
                if (e.target.closest(".dropdown")) return;

                dropdown.classList.toggle("hidden");
                toggleBtn.textContent = dropdown.classList.contains("hidden") ? "+" : "−";

                // Apply custom TailwindCSS classes to the dropdown when it's visible DIV > UL
                if (!dropdown.classList.contains("hidden")) {
                    dropdown.className = "";
                    dropdown.classList.add(
                        "transition-all",
                        "duration-300",
                        "ease-in-out",
                    );
                    dropdown.classList.remove(
                        "flex",
                        "justify-between",
                        "bg-gray-50",
                        "item-center",
                        "relative",
                    );
                    // dropdown.classList.add(
                    //     "w-full",
                    //     "bg-sky-300",
                    //     "border-b",
                    //     "border-lime-500",
                    //     "px-2",
                    //     "max-h-48",
                    //     "overflow-y-auto"
                    // );
                }
            });
        }
    });

    // Open mobile menu
    openMenuBtn.addEventListener("click", function () {
        mobileMenu.classList.remove("-translate-x-full");
    });

    // Close mobile menu
    closeMenuBtn.addEventListener("click", function () {
        mobileMenu.classList.add("-translate-x-full");
    });

    // Slider Option displaying slider on homepage
    const slideContainer = document.getElementById("slide-container");
    const slides = document.querySelectorAll(".slide");
    const indicators = document.querySelectorAll(".slide-indicator");
    const prevButton = document.getElementById("prev-button");
    const nextButton = document.getElementById("next-button");
    let currentIndex = 0;

    // Function to update the slide position
    function updateSlide() {
        slideContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle("opacity-100", index === currentIndex);
            indicator.classList.toggle("opacity-50", index !== currentIndex);
        });
    }

    // Previous Button Click
    prevButton.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlide();
    });

    // Next Button Click
    nextButton.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlide();
    });

    // Auto-slide functionality
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlide();
    }, 5000);

    // Indicator Click Functionality
    indicators.forEach((indicator) => {
        indicator.addEventListener("click", () => {
            const slideIndex = parseInt(indicator.getAttribute("data-slideindex"));
            currentIndex = slideIndex;
            updateSlide();
        });
    });



    // To show Tooltips
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('mouseenter', () => {
            const tooltip = button.querySelector('.tooltip-text');
            const buttonRect = button.getBoundingClientRect();
            const tooltipRect = tooltip.getBoundingClientRect();

            if (buttonRect.right + tooltipRect.width > window.innerWidth) {
                tooltip.classList.remove('left-full', 'ml-2');
                tooltip.classList.add('right-full', 'mr-2');
                tooltip.querySelector('span').classList.remove('-left-2', 'border-r-4');
                tooltip.querySelector('span').classList.add('-right-2', 'border-l-4');
            } else {
                tooltip.classList.remove('right-full', 'mr-2');
                tooltip.classList.add('left-full', 'ml-2');
                tooltip.querySelector('span').classList.remove('-right-2', 'border-l-4');
                tooltip.querySelector('span').classList.add('-left-2', 'border-r-4');
            }
        });
    });


    // Scrolling to the top funciton
    const scrollToTopButton = document.getElementById("scrollToTop");

    // Show the button and adjust opacity based on scroll position
    window.addEventListener("scroll", () => {
        const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

        // Calculate opacity based on how much you've scrolled
        const opacity = Math.min(scrollPosition / maxScroll, 1); // Max opacity is 1 when fully scrolled
        scrollToTopButton.style.opacity = opacity;

        // Show the button when scrolled down enough
        if (scrollPosition > 100) {
            scrollToTopButton.classList.remove("hidden");
        } else {
            scrollToTopButton.classList.add("hidden");
        }
    });

    // Scroll to top when the button is clicked
    scrollToTopButton.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

});
