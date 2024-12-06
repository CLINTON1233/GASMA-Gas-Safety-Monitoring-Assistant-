<x-layouts.app title="Dashboard">
    <!-- Statistik Utama -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Total Clients -->
        <div class="bg-white p-4 rounded-lg shadow flex items-center">
            <div class="text-blue-500 bg-blue-100 p-3 rounded-full">
                <i class="fas fa-users text-2xl"></i>
            </div>
            <div class="ml-4">
                <h2 class="font-bold text-lg">Clients</h2>
                <p class="text-4xl font-bold">512</p>
            </div>
        </div>

        <!-- Total Sales -->
        <div class="bg-white p-4 rounded-lg shadow flex items-center">
            <div class="text-green-500 bg-green-100 p-3 rounded-full">
                <i class="fas fa-dollar-sign text-2xl"></i>
            </div>
            <div class="ml-4">
                <h2 class="font-bold text-lg">Sales</h2>
                <p class="text-4xl font-bold">$7,770</p>
            </div>
        </div>

        <!-- Performance -->
        <div class="bg-white p-4 rounded-lg shadow flex items-center">
            <div class="text-red-500 bg-red-100 p-3 rounded-full">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
            <div class="ml-4">
                <h2 class="font-bold text-lg">Performance</h2>
                <p class="text-4xl font-bold">256%</p>
            </div>
        </div>
    </div>

    <!-- Grafik Performance -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="font-bold text-lg mb-4">Performance</h2>
        <canvas id="performanceChart"></canvas>
    </div>
</x-layouts.app>