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
