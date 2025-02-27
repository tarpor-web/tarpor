<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>@yield('title', 'Admin Dashboard | TARPOR ')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/logos/favicon.ico') }}" type="image/png">

    <!-- Include Tailwind CSS  -->
    @vite(['resources/css/app.css'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        canvas {
            height: 400px !important;
            width: 100% !important;
        }
    </style>
</head>
<body class="bg-gray-100" x-data="{ isSidebarCollapsed: false, openProfileDropdown: false, openNotifications: false }">
<!-- Top Bar -->
<div class="fixed top-0 left-0 right-0 bg-gray-950 shadow-md z-50">
    <div class="container mx-auto lg:px-4">
        <div class="flex items-center justify-between px-4 sm:px-6 h-16 relative">
            <!-- Logo (Left) -->
            <div class="flex-shrink-0">
                <img src="{{ asset('logos/logo.svg') }}" alt="Logo" class="h-8 w-auto">
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
            <div class="flex items-center space-x-6">
                <!-- Search Icon for Mobile -->
                <div class="md:hidden" x-data="{ openSearch: false }">
                    <button @click="openSearch = !openSearch" class="text-gray-400 hover:text-white focus:outline-none">
                        <i class="fas fa-search text-lg"></i>
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
                        <i class="fas fa-bell text-xl"></i>
                        <!-- Notification Count Badge -->
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-2 py-1 transform translate-x-1/2 -translate-y-1/2">
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
                        <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <!-- Profile Dropdown Menu -->
                    <div x-show="openProfileDropdown" @click.away="openProfileDropdown = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50 overflow-hidden">
                        <ul class="py-2">
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                    <i class="fas fa-user-circle mr-2"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                    <i class="fas fa-cog mr-2"></i> Settings
                                </a>
                            </li>
                            <li class="border-t border-gray-200">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="flex pt-16 h-[calc(100vh-4rem)]">
    <!-- Left Sidebar -->
    <div class="fixed left-0 top-16 bottom-0 w-64 bg-white shadow-md overflow-y-auto transition-all duration-300 ease-in-out"
         :class="{ '-translate-x-full': isSidebarCollapsed, 'translate-x-0': !isSidebarCollapsed }">

        <ul class="space-y-2 p-4">
            <li>
                <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg group relative">
                    <i class="fas fa-tachometer-alt"></i>
                    <span :class="{ 'hidden': isSidebarCollapsed }" class="ml-2">Dashboard</span>
                    <span x-show="isSidebarCollapsed"
                          class="absolute left-16 bg-gray-700 text-white text-sm px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            Dashboard
                        </span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg group relative">
                    <i class="fas fa-box"></i>
                    <span :class="{ 'hidden': isSidebarCollapsed }" class="ml-2">Products</span>
                    <span x-show="isSidebarCollapsed"
                          class="absolute left-16 bg-gray-700 text-white text-sm px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            Products
                        </span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg group relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span :class="{ 'hidden': isSidebarCollapsed }" class="ml-2">Orders</span>
                    <span x-show="isSidebarCollapsed"
                          class="absolute left-16 bg-gray-700 text-white text-sm px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            Orders
                        </span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-700 hover:bg-gray-50 rounded-lg group relative">
                    <i class="fas fa-users"></i>
                    <span :class="{ 'hidden': isSidebarCollapsed }" class="ml-2">Customers</span>
                    <span x-show="isSidebarCollapsed"
                          class="absolute left-16 bg-gray-700 text-white text-sm px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            Customers
                        </span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Right Content -->
    <div class="flex-grow p-8 transition-all duration-300 overflow-y-auto"
         :class="{ 'md:ml-16': isSidebarCollapsed, 'md:ml-64': !isSidebarCollapsed }">
        <!-- Charts and Graphical Displays -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Sales -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800">Total Sales</h3>
                <p class="text-2xl font-bold text-blue-500">$12,345</p>
                <canvas id="salesChart" class="mt-4"></canvas>
            </div>

            <!-- Total Orders -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800">Total Orders</h3>
                <p class="text-2xl font-bold text-green-500">456</p>
                <canvas id="ordersChart" class="mt-4"></canvas>
            </div>

            <!-- Total Customers -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800">Total Customers</h3>
                <p class="text-2xl font-bold text-purple-500">789</p>
                <canvas id="customersChart" class="mt-4"></canvas>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">#12345</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-sm bg-green-100 text-green-800 rounded-full">Delivered</span></td>
                        <td class="px-6 py-4 whitespace-nowrap">$120.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">#12346</td>
                        <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-sm bg-yellow-100 text-yellow-800 rounded-full">Pending</span></td>
                        <td class="px-6 py-4 whitespace-nowrap">$80.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Scripts -->
<script>
    // Sales Chart
    const salesChart = new Chart(document.getElementById('salesChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales',
                data: [5000, 7000, 9000, 12000, 10000, 8000],
                borderColor: '#3b82f6',
                fill: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // Orders Chart
    const ordersChart = new Chart(document.getElementById('ordersChart'), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Orders',
                data: [100, 150, 200, 250, 300, 350],
                backgroundColor: '#10b981',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // Customers Chart
    const customersChart = new Chart(document.getElementById('customersChart'), {
        type: 'doughnut',
        data: {
            labels: ['New', 'Returning'],
            datasets: [{
                label: 'Customers',
                data: [500, 300],
                backgroundColor: ['#8b5cf6', '#c4b5fd'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });
</script>

    @vite(['resources/js/app.js'])

</body>
</html>
