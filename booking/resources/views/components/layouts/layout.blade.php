<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-white">

    <!-- Navbar Section -->
    <div class="flex justify-between items-center space-x-8 p-5 bg-gray-900 text-white">
        <!-- Logo -->
        <div>
            <img src={{Vite::asset('resources/images/logo.svg')}} alt="logo" class="h-8 w-auto">
        </div>

        <!-- Navigation Links -->
        <div class="space-x-6">
            <a href="/" class="text-lg font-semibold hover:text-indigo-400 transition duration-300 ease-in-out">Home</a>
            <a href="/about"
                class="text-lg font-semibold hover:text-indigo-400 transition duration-300 ease-in-out">About</a>
        </div>

        <!-- Authentication Links -->
        <div class="space-x-6">
            @auth
                <a href="/logout"
                    class="text-lg font-semibold text-red-500 hover:text-red-400 transition duration-300 ease-in-out">Logout</a>
            @endauth

            @guest
                <a href="/login"
                    class="text-lg font-semibold text-indigo-500 hover:text-indigo-400 transition duration-300 ease-in-out">Login</a>
            @endguest
        </div>
    </div>

    <!-- Content Section (Slot) -->
    <div class="h-screen">
        {{$slot}}
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">About Us</h3>
                    <p class="text-gray-400 text-base">We offer an efficient and user-friendly booking system that
                        simplifies scheduling appointments for both clients and staff. Manage your appointments with
                        ease and confidence.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-indigo-500">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-indigo-500">About</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-indigo-500">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Contact Info</h3>
                    <p class="text-gray-400 text-base">Email: <a href="mailto:info@bookingsystem.com"
                            class="text-indigo-500 hover:text-indigo-400">info@bookingsystem.com</a></p>
                    <p class="text-gray-400 text-base">Phone: <a href="tel:+123456789"
                            class="text-indigo-500 hover:text-indigo-400">+1 (234) 567-89</a></p>
                </div>

                <!-- Social Media Links -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-indigo-500 transition duration-300">
                            <img src="{{Vite::asset('resources/images/fb.svg')}}" alt="fb" class="h-8 w-8">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-indigo-500 transition duration-300">
                            <img src="{{Vite::asset('resources/images/x.svg')}}" alt="fb" class="h-8 w-8">
                        </a>
                        <a href="#" class="text-gray-400 hover:text-indigo-500 transition duration-300">
                            <img src="{{Vite::asset('resources/images/linkedin.svg')}}" alt="fb" class="h-8 w-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="bg-gray-800 py-4 text-center">
            <p class="text-sm text-gray-400">&copy; 2025 Booking System. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>