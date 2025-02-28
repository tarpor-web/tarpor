@extends('layouts.admin')
@push('styles')
    <style>
        canvas {
            height: 200px !important;
            width: 100% !important;
        }
    </style>
@endpush

@section('content')
<!-- Right Content -->
<div class="flex-grow p-8 transition-all duration-300 overflow-y-auto"
     :class="{ 'ml-40': isSidebarCollapsed, 'ml-8 lg:ml-64': !isSidebarCollapsed }">
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

@endsection

@push('scripts')
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
@endpush
