<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <div class="flex flex-1">
        <!-- Sidebar -->
        <div class="w-60 bg-[#232733] text-white min-h-screen px-6 py-8">
            <div class="flex items-center gap-2 text-2xl font-bold mb-8">
                <i class="fas fa-hard-hat"></i>
                GASMA
            </div>
            <nav class="flex flex-col">
                <a href="dashboard" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">dashboard</i>
                    Dashboard
                </a>
                <a href="pemantauan_gas" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">analytics</i>
                    Pemantauan Gas
                </a>
                <a href="pemantauan_suhu" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">thermostat</i>
                    Pemantauan Suhu
                </a>
                <a href="pemantauan_cahaya" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">vibration</i>
                    Pemantauan Getaran
                </a>
                <a href="notifikasi_insiden" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">notification_important</i>
                    Notifikasi Insiden
                </a>
                <a href="lokasi" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">place</i>
                    Lokasi
                </a>
                <a href="riwayat_pemantauan" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">history</i>
                    Riwayat Pemantauan
                </a>
                <a href="pengguna" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">people</i>
                    Pengguna
                </a>
                <a href="pengaturan_sistem" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">settings</i>
                    Pengaturan Sistem
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <span class="material-icons text-gray-500">search</span>
                    <input type="text" placeholder="Type to search..." class="bg-gray-100 px-4 py-2 rounded-md w-64 text-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="flex items-center gap-6">
                    <button class="bg-gray-100 p-2 rounded-full relative">
                        <span class="material-icons text-gray-500">notifications</span>
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">2</span>
                    </button>
                    <button class="bg-gray-100 p-2 rounded-full">
                        <span class="material-icons text-gray-500">chat</span>
                    </button>
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


            <!-- <footer class="bg-[#232733] text-white text-center py-4 w-full"> -->
            <!-- <p class="text-sm">&copy; 2024 GASMA. All rights reserved.</p>
            </footer> -->


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