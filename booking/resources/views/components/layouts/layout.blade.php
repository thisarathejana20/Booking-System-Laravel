<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <div class="flex justify-between items-center space-x-8 p-5 bg-gray-900 text-white">
        <!-- Logo -->
        <div>
            <img src={{Vite::asset('resources/images/logo.svg')}} alt="logo" class="h-8 w-auto">
        </div>

        <!-- Navigation Links -->
        <div class="space-x-6">
            <a href="" class="text-lg font-semibold hover:text-indigo-400 transition duration-300 ease-in-out">Home</a>
            <a href="" class="text-lg font-semibold hover:text-indigo-400 transition duration-300 ease-in-out">About</a>
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
    {{$slot}}
</body>

</html>