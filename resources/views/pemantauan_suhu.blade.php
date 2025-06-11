<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan Suhu - Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <a href="pemantauan_suhu" class="menu-item bg-white text-black flex items-center gap-3 py-2 text-sm font-semibold hover:bg-white hover:text-black transition transform hover:scale-105 hover:shadow-md rounded-lg mb-4">
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
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Pemantauan Suhu</h1>
                    <p class="text-gray-600">Monitoring suhu dan kelembaban real-time dari sensor DHT22</p>
                </div>

                <!-- Connection Status -->
                <div class="mb-6">
                    <div id="connectionStatus" class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Disconnected
                    </div>
                </div>

                <!-- Real-time Data Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Temperature Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-red-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Suhu</h3>
                                <p id="temperatureValue" class="text-3xl font-bold text-red-600">--°C</p>
                                <p id="temperatureStatus" class="text-sm text-gray-500 mt-1">Status: Normal</p>
                            </div>
                            <div class="text-red-500">
                                <i class="material-icons text-4xl">thermostat</i>
                            </div>
                        </div>
                    </div>

                    <!-- Humidity Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Kelembaban</h3>
                                <p id="humidityValue" class="text-3xl font-bold text-blue-600">--%</p>
                                <p id="humidityStatus" class="text-sm text-gray-500 mt-1">Status: Normal</p>
                            </div>
                            <div class="text-blue-500">
                                <i class="material-icons text-4xl">water_drop</i>
                            </div>
                        </div>
                    </div>

                    <!-- Last Update Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Update Terakhir</h3>
                                <p id="lastUpdate" class="text-lg font-medium text-green-600">--:--:--</p>
                                <p class="text-sm text-gray-500 mt-1">Waktu terbaru</p>
                            </div>
                            <div class="text-green-500">
                                <i class="material-icons text-4xl">schedule</i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Grafik Real-time</h3>
                        <div class="flex gap-2">
                            <button id="clearChart" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                Clear Data
                            </button>
                        </div>
                    </div>
                    <div style="height: 400px;">
                        <canvas id="temperatureChart"></canvas>
                    </div>
                </div>

                <!-- LED Status Simulation -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Status LED Sensor</h3>
                    <div class="flex gap-6 items-center">
                        <div class="flex items-center gap-2">
                            <div id="ledRed" class="w-4 h-4 rounded-full bg-gray-300 transition-all duration-300"></div>
                            <span class="text-sm text-gray-600">LED Merah (> 40°C)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div id="ledYellow" class="w-4 h-4 rounded-full bg-gray-300 transition-all duration-300"></div>
                            <span class="text-sm text-gray-600">LED Kuning (< 15°C)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div id="ledGreen" class="w-4 h-4 rounded-full bg-green-500 transition-all duration-300"></div>
                            <span class="text-sm text-gray-600">LED Hijau (Normal)</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#232733] text-white text-center py-4 w-full">
        <p class="text-sm">&copy; 2024 GASMA. All rights reserved.</p>
    </footer>

    <script>
        // MQTT Configuration
        const MQTT_HOST = '10.170.14.180'; // Sesuaikan dengan IP broker Anda
        const MQTT_PORT = 9001; // Port untuk WebSocket (perlu dikonfigurasi di Mosca)
        const MQTT_TOPIC = 'building/temperature';

        // Variables
        let client;
        let temperatureChart;
        let temperatureData = [];
        let humidityData = [];
        let timeLabels = [];
        const maxDataPoints = 20;

        // Initialize Chart
        function initializeChart() {
            const ctx = document.getElementById('temperatureChart').getContext('2d');
            temperatureChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: timeLabels,
                    datasets: [{
                        label: 'Suhu (°C)',
                        data: temperatureData,
                        borderColor: 'rgb(239, 68, 68)',
                        backgroundColor: 'rgba(239, 68, 68, 0.1)',
                        tension: 0.4,
                        yAxisID: 'y'
                    }, {
                        label: 'Kelembaban (%)',
                        data: humidityData,
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4,
                        yAxisID: 'y1'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Suhu (°C)'
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Kelembaban (%)'
                            },
                            grid: {
                                drawOnChartArea: false,
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            });
        }

        // Update Connection Status
        function updateConnectionStatus(connected) {
            const statusEl = document.getElementById('connectionStatus');
            if (connected) {
                statusEl.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800';
                statusEl.innerHTML = '<span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>Connected';
            } else {
                statusEl.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800';
                statusEl.innerHTML = '<span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>Disconnected';
            }
        }

        // Update LED Status
        function updateLEDStatus(temperature) {
            const ledRed = document.getElementById('ledRed');
            const ledYellow = document.getElementById('ledYellow');
            const ledGreen = document.getElementById('ledGreen');

            // Reset all LEDs
            ledRed.className = 'w-4 h-4 rounded-full bg-gray-300 transition-all duration-300';
            ledYellow.className = 'w-4 h-4 rounded-full bg-gray-300 transition-all duration-300';
            ledGreen.className = 'w-4 h-4 rounded-full bg-gray-300 transition-all duration-300';

            if (temperature > 40) {
                ledRed.className = 'w-4 h-4 rounded-full bg-red-500 shadow-lg transition-all duration-300';
            } else if (temperature < 15) {
                ledYellow.className = 'w-4 h-4 rounded-full bg-yellow-500 shadow-lg transition-all duration-300';
            } else {
                ledGreen.className = 'w-4 h-4 rounded-full bg-green-500 shadow-lg transition-all duration-300';
            }
        }

        // Update Data Display
        function updateDataDisplay(data) {
            const now = new Date();
            const timeString = now.toLocaleTimeString();

            // Update temperature
            document.getElementById('temperatureValue').textContent = `${data.suhu.toFixed(1)}°C`;
            let tempStatus = 'Normal';
            if (data.suhu > 40) tempStatus = 'Panas';
            else if (data.suhu < 15) tempStatus = 'Dingin';
            document.getElementById('temperatureStatus').textContent = `Status: ${tempStatus}`;

            // Update humidity
            document.getElementById('humidityValue').textContent = `${data.kelembaban.toFixed(1)}%`;
            let humidityStatus = 'Normal';
            if (data.kelembaban > 80) humidityStatus = 'Tinggi';
            else if (data.kelembaban < 30) humidityStatus = 'Rendah';
            document.getElementById('humidityStatus').textContent = `Status: ${humidityStatus}`;

            // Update last update time
            document.getElementById('lastUpdate').textContent = timeString;

            // Update LED status
            updateLEDStatus(data.suhu);

            // Add data to chart
            addDataToChart(data.suhu, data.kelembaban, timeString);
        }

        // Add Data to Chart
        function addDataToChart(temperature, humidity, time) {
            temperatureData.push(temperature);
            humidityData.push(humidity);
            timeLabels.push(time);

            // Keep only last maxDataPoints
            if (temperatureData.length > maxDataPoints) {
                temperatureData.shift();
                humidityData.shift();
                timeLabels.shift();
            }

            temperatureChart.update();
        }

        // Clear Chart Data
        function clearChartData() {
            temperatureData.length = 0;
            humidityData.length = 0;
            timeLabels.length = 0;
            temperatureChart.update();
        }

        // Initialize MQTT Connection
        function connectMQTT() {
            // Note: Untuk WebSocket, broker Mosca perlu dikonfigurasi dengan WebSocket support
            // Anda perlu menambahkan konfigurasi WebSocket di broker.js
            client = new Paho.MQTT.Client(MQTT_HOST, MQTT_PORT, "web_client_" + Math.random().toString(16).substr(2, 8));

            client.onConnectionLost = function(responseObject) {
                if (responseObject.errorCode !== 0) {
                    console.log("Connection lost: " + responseObject.errorMessage);
                    updateConnectionStatus(false);
                    // Try to reconnect after 5 seconds
                    setTimeout(connectMQTT, 5000);
                }
            };

            client.onMessageArrived = function(message) {
                console.log("Message received: " + message.payloadString);
                try {
                    const data = JSON.parse(message.payloadString);
                    updateDataDisplay(data);
                } catch (error) {
                    console.error("Error parsing message:", error);
                }
            };

            const options = {
                onSuccess: function() {
                    console.log("Connected to MQTT broker");
                    updateConnectionStatus(true);
                    client.subscribe(MQTT_TOPIC);
                    console.log("Subscribed to topic: " + MQTT_TOPIC);
                },
                onFailure: function(error) {
                    console.log("Connection failed: " + error.errorMessage);
                    updateConnectionStatus(false);
                    // Try to reconnect after 5 seconds
                    setTimeout(connectMQTT, 5000);
                }
            };

            try {
                client.connect(options);
            } catch (error) {
                console.error("MQTT connection error:", error);
                updateConnectionStatus(false);
                // Fallback: simulate data for demo purposes
                simulateData();
            }
        }

        // Simulate Data (fallback when MQTT is not available)
        function simulateData() {
            console.log("Simulating data...");
            setInterval(() => {
                const simulatedData = {
                    suhu: 20 + Math.random() * 30, // 20-50°C
                    kelembaban: 40 + Math.random() * 40 // 40-80%
                };
                updateDataDisplay(simulatedData);
            }, 3000);
        }

        // Sidebar menu functionality
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            item.addEventListener('click', function(event) {
                menuItems.forEach(i => i.classList.remove('bg-white', 'text-black'));
                this.classList.add('bg-white', 'text-black');
            });
        });

        // Clear chart button
        document.getElementById('clearChart').addEventListener('click', clearChartData);

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            initializeChart();
            connectMQTT();
        });
    </script>
</body>

</html>