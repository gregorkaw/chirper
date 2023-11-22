<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:flex-col sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center py-20">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Welcome to Chirper</h1>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">Connect with friends and share your thoughts</p>
                <div class="mt-8">
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-black dark:bg-gray-700 text-white font-semibold rounded-md hover:opacity-50 duration-300 transition-all">Get Started</a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="ms-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</body>
</html>
