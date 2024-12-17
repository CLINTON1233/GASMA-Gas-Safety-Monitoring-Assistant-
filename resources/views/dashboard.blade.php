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
                    <i class="material-icons text-lg">wb_sunny</i>
                    Pemantauan Cahaya
                </a>
                <a href="notifikasi_insiden" class="menu-item flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
                    <i class="material-icons text-lg">notification_important</i>
                    Notifikasi Insiden
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
        <!-- Main Content Area with Header -->
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
            <!-- Main Content -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-4 gap-6">
                    <!-- Card 1: Bahaya Gas Terdeteksi -->
                    <div class="bg-white rounded-lg p-6 shadow-lg flex flex-col items-center justify-between">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-icons text-2xl text-indigo-600">gas_meter</span>
                            <h3 class="text-gray-600 text-lg font-semibold">Bahaya Gas Terdeteksi</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-800">12 PPM</p>
                        <p class="text-sm text-red-500">Tingkat Bahaya: Tinggi</p> <!-- Sesuaikan dengan tingkat bahaya -->
                    </div>

                    <!-- Card 2: Suhu Tertinggi -->
                    <div class="bg-white rounded-lg p-6 shadow-lg flex flex-col items-center justify-between">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-icons text-2xl text-indigo-600">thermostat</span>
                            <h3 class="text-gray-600 text-lg font-semibold">Suhu Tertinggi</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-800">35 °C</p>
                        <p class="text-sm text-orange-500">Suhu Melebihi Batas</p> <!-- Sesuaikan dengan status suhu -->
                    </div>

                    <!-- Card 3: Cahaya Redup -->
                    <div class="bg-white rounded-lg p-6 shadow-lg flex flex-col items-center justify-between">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-icons text-2xl text-indigo-600">lightbulb</span>
                            <h3 class="text-gray-600 text-lg font-semibold">Cahaya Redup</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-800">3 Kali</p>
                        <p class="text-sm text-yellow-500">Cahaya Redup Terpantau</p> <!-- Sesuaikan dengan jumlah kejadian cahaya redup -->
                    </div>

                    <!-- Card 4: Jumlah Insiden -->
                    <div class="bg-white rounded-lg p-6 shadow-lg flex flex-col items-center justify-between">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="material-icons text-2xl text-indigo-600">warning</span>
                            <h3 class="text-gray-600 text-lg font-semibold">Jumlah Insiden</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-800">2 Kasus</p>
                        <p class="text-sm text-red-500">Tingkat Keparahan: Tinggi</p> <!-- Sesuaikan dengan tingkat keparahan insiden -->
                    </div>
                </div>

                <div class="container mx-auto p-6">
                    <div class="flex space-x-4">
                        <!-- Grafik 1: Line Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6 w-1/2">
                            <h2 class="text-lg font-bold text-gray-700 mb-4">Perubahan Tingkat Suhu</h2>
                            <div class="flex justify-end mb-4">
                                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-1 px-3 rounded">Harian</button>
                                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-1 px-3 rounded ml-2">Mingguan</button>
                                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-1 px-3 rounded ml-2">Bulanan</button>
                            </div>
                            <canvas id="lineChart" class="w-full h-48"></canvas>
                        </div>

                        <!-- Grafik 2: Bar Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6 w-1/2">
                            <h2 class="text-lg font-bold text-gray-700 mb-4">Perbandingan Insiden Gas</h2>
                            <canvas id="barChart" class="w-full h-48"></canvas>
                        </div>
                    </div>
                </div>

                <div class="container mx-auto p-6">
                    <div class="flex space-x-4">
                        <!-- Grafik 3:  Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6 w-1/2">
                            <h2 class="text-lg font-bold text-gray-700 mb-4">Riwayat Pemantauan Gas</h2>
                            <canvas id="chart3" class="w-full h-48"></canvas>
                        </div>

                        <!-- Grafik 4:  Chart -->
                        <div class="bg-white rounded-lg shadow-md p-6 w-1/2">
                            <h2 class="text-lg font-bold text-gray-700 mb-4">Riwayat Insiden</h2>
                            <canvas id="chart4" class="w-1/4 h-20"></canvas> <!-- Mengurangi ukuran grafik -->
                        </div>
                    </div>
                </div>

                <script>
                    // Grafik Line Chart
                    const lineChartCanvas = document.getElementById('lineChart');
                    const lineChart = new Chart(lineChartCanvas, {
                        type: 'line',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                            datasets: [{
                                label: 'Suhu (°C)',
                                data: [20, 22, 25, 27, 30, 28, 26, 29, 31, 33, 30, 28],
                                borderColor: '#4F46E5',
                                backgroundColor: 'rgba(79, 70, 229, 0.2)',
                                borderWidth: 2,
                                pointRadius: 4,
                                pointBackgroundColor: '#4F46E5',
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: false
                                },
                            },
                            scales: {
                                x: {
                                    grid: {
                                        display: false
                                    },
                                    ticks: {
                                        color: '#6B7280'
                                    },
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 5,
                                        color: '#6B7280'
                                    },
                                }
                            }
                        }
                    });

                    // Grafik Bar Chart
                    const barChartCanvas = document.getElementById('barChart');
                    const barChart = new Chart(barChartCanvas, {
                        type: 'bar',
                        data: {
                            labels: ['Helm A', 'Helm B', 'Helm C', 'Helm D', 'Helm E'],
                            datasets: [{
                                label: 'Jumlah Insiden',
                                data: [5, 3, 8, 6, 9],
                                backgroundColor: function(context) {
                                    const chart = context.chart;
                                    const ctx = chart.ctx;
                                    const gradient = ctx.createLinearGradient(0, 0, 0, 400); // Membuat gradasi dari atas ke bawah
                                    gradient.addColorStop(0, '#1E3A8A'); // Biru tua
                                    gradient.addColorStop(1, '#3B82F6'); // Biru muda
                                    return gradient;
                                },
                                borderWidth: 1,
                                borderColor: '#E5E7EB',
                                barThickness: 30, // Menentukan lebar batang
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: false
                                },
                            },
                            scales: {
                                x: {
                                    grid: {
                                        display: false
                                    },
                                    ticks: {
                                        color: '#6B7280'
                                    },
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1,
                                        color: '#6B7280'
                                    },
                                }
                            }
                        }
                    });


                    // grafik 3
                    const chart3Ctx = document.getElementById('chart3').getContext('2d');
                    new Chart(chart3Ctx, {
                        type: 'line',
                        data: {
                            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                            datasets: [{
                                label: 'Tingkat Gas (PPM)',
                                data: [12, 15, 8, 10, 18, 20, 22],
                                borderColor: 'rgba(54, 162, 235, 1)',
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderWidth: 2,
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top',
                                },
                            },
                        }
                    });

                    // JavaScript for Doughnut Chart (Chart.js)
                    const ctx4 = document.getElementById('chart4').getContext('2d');
                    const chart4 = new Chart(ctx4, {
                        type: 'doughnut',
                        data: {
                            labels: ['Insiden A', 'Insiden B', 'Insiden C'],
                            datasets: [{
                                data: [30, 50, 20],
                                backgroundColor: ['#2C3E50', '#95A5A6', '#7F8C8D'],
                                hoverOffset: 4 // Optional: Adds a hover effect
                            }]
                        },
                        options: {
                            responsive: true,
                            cutoutPercentage: 70,
                            plugins: {
                                legend: {
                                    position: 'top', // Optional: position of the legend
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(tooltipItem) {
                                            return tooltipItem.label + ': ' + tooltipItem.raw + '%'; // Display percentage in tooltip
                                        }
                                    }
                                }
                            }
                        }
                    });
                </script>


            </main>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-[#232733] text-white text-center py-4 w-full">
        <p class="text-sm">&copy; 2024 GASMA. All rights reserved.</p>
    </footer>


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