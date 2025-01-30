<x-layouts.layout>
    <form action="/login" method="POST">
        @csrf
        <div class="max-w-md mx-auto p-6 bg-gray-800 rounded-lg shadow-lg mt-5">
            <form action="" method="POST" class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-white font-semibold">Email:</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-white font-semibold">Password:</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit"
                        class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200 ease-in-out">
                        Login
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <a href="/register" class="text-indigo-400 hover:text-indigo-600 text-sm">Don't have an account?
                        Register</a>
                </div>
            </form>
        </div>
    </form>
</x-layouts.layout>