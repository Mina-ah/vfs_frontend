<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Website')</title>

    @vite('resources/css/style.css')
    @vite('resources/js/script.js')

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <nav class="flex items-center justify-center space-x-8">
                <!-- Logo -->
                <a href="/">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-14 w-auto">
                </a>
                <!-- Navigation Links -->
                <a href="/" class="hover:text-blue-600 font-semibold">Home</a>
                <div class="relative group">
                    <button class="hover:text-blue-600 font-semibold focus:outline-none">
                        Insurance
                        <svg class="inline-block w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white border shadow rounded mt-2 w-40">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Health Insurance</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Motor Insurance</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Travel Insurance</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Property Insurance</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Asset Insurance</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pet Insurance</a>
                    </div>
                </div>
                <a href="#" class="hover:text-blue-600 font-semibold">Renew Your Policy</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 font-semibold">About Us</a>
                <a href="#" class="hover:text-blue-600 font-semibold">Contact Us</a>
                <!-- Buttons -->
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
                <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Register</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-10">
            <div class="flex justify-between items-center">
                <!-- Footer Logo and Text -->
                <div>
                    <h2 class="text-lg font-bold">LOGO</h2>
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </div>
                <!-- Footer Links -->
                <nav class="space-x-6">
                    <a href="#" class="hover:text-blue-400">Privacy Policy</a>
                    <a href="#" class="hover:text-blue-400">Terms of Service</a>
                    <a href="#" class="hover:text-blue-400">FAQs</a>
                </nav>
            </div>
        </div>
    </footer>


</body>


</html>
