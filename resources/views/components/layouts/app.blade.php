<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="px-6 py-4">
                <h2 class="text-lg font-bold">Admin Dashboard</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="block px-6 py-2 hover:bg-gray-700">Dashboard</a></li>
                    <li><a href="{{ route('monitoring') }}" class="block px-6 py-2 hover:bg-gray-700">Monitoring</a></li>
                    <li><a href="{{ route('settings') }}" class="block px-6 py-2 hover:bg-gray-700">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $title ?? 'Dashboard' }}</h1>
            {{ $slot }}
        </main>
    </div>
</body>

</html>