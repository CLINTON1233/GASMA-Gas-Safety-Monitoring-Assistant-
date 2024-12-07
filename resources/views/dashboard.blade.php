<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-60 bg-[#232733] text-white h-screen px-6 py-8">
            <div class="flex items-center gap-2 text-2xl font-bold mb-8">
                <i class="fas fa-hard-hat"></i>
                GASMA
            </div>
            <nav class="flex flex-col">
                <a href="#" id="menu-dashboard" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">dashboard</i>
                    Dashboard
                </a>
                <a href="#" id="menu-pemantauan-gas" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">analytics</i>
                    Pemantauan Gas
                </a>
                <a href="#" id="menu-pemantauan-suhu" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">thermostat</i>
                    Pemantauan Suhu
                </a>
                <a href="#" id="menu-pemantauan-cahaya" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">wb_sunny</i>
                    Pemantauan Cahaya
                </a>
                <a href="#" id="menu-notifikasi-insiden" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">notification_important</i>
                    Notifikasi Insiden
                </a>
                <a href="#" id="menu-riwayat-pemantauan" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">history</i>
                    Riwayat Pemantauan
                </a>
                <a href="#" id="menu-pengaturan-sistem" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">settings</i>
                    Pengaturan Sistem
                </a>
            </nav>
        </div>

        <!-- Main Content Area with Header -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between">
                <!-- Search bar -->
                <div class="flex items-center gap-4">
                    <span class="material-icons text-gray-500">search</span>
                    <input type="text" placeholder="Type to search..." class="bg-gray-100 px-4 py-2 rounded-md w-64 text-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>

                <!-- User actions -->
                <div class="flex items-center gap-6">
                    <!-- Notification -->
                    <button class="bg-gray-100 p-2 rounded-full relative">
                        <span class="material-icons text-gray-500">notifications</span>
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">2</span>
                    </button>
                    <!-- Messages -->
                    <button class="bg-gray-100 p-2 rounded-full">
                        <span class="material-icons text-gray-500">chat</span>
                    </button>

                    <!-- User profile -->
                    <div class="flex items-center gap-3">
                        <img src="https://via.placeholder.com/40" alt="User Photo" class="w-10 h-10 rounded-full">
                        <div>
                            <h4 class="text-gray-800 text-sm font-semibold">Clinton Alfaro</h4>
                            <p class="text-gray-500 text-xs">Admin</p>
                        </div>
                        <button>
                            <span class="material-icons text-gray-500">expand_more</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h3 class="text-gray-600">Gas Berbahaya Terdeteksi</h3>
                        <p class="text-2xl font-bold">12 ppm</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h3 class="text-gray-600">Suhu Tertinggi</h3>
                        <p class="text-2xl font-bold">45°C</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h3 class="text-gray-600">Cahaya Redup</h3>
                        <p class="text-2xl font-bold">4 Kali</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow">
                        <h3 class="text-gray-600">Jumlah Insiden</h3>
                        <p class="text-2xl font-bold">2 Kasus</p>
                    </div>
                </div>

                <!-- Chart Placeholder -->
                <div class="mt-6 bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-700 mb-4">Total Revenue</h3>
                    <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                        <p>Chart Placeholder</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // JavaScript to handle the active state of the sidebar menu
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            item.addEventListener('click', function(event) {
                // Remove active class from all items
                menuItems.forEach(i => i.classList.remove('bg-white', 'text-black'));

                // Add active class to clicked item
                this.classList.add('bg-white', 'text-black');
            });

            // Ensure that active class remains on page load
            if (item.classList.contains('active')) {
                item.classList.add('bg-white', 'text-black');
            }
        });
    </script>
</body>

</html>