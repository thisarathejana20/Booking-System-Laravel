<x-layouts.layout>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Search Box -->
        <div class="mb-6">
            <input type="text" placeholder="Search..."
                class="w-full px-6 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
        </div>

        <!-- Add New Service Provider Button -->
        <div class="mb-6">
            <a href="/search-staff"
                class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transform transition duration-200 ease-in-out hover:scale-105">
                Add a New Service Provider
            </a>
            <a href="/search-admin"
                class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transform transition duration-200 ease-in-out hover:scale-105">
                Add a New Admin
            </a>
            <a href="/analytics"
                class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transform transition duration-200 ease-in-out hover:scale-105">
                View Analytics
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <p class="text-3xl font-bold text-indigo-600">{{ $totalBookingsToday }}</p>
                <p class="text-gray-600">Ongoing Bookings Today</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <p class="text-3xl font-bold text-indigo-600">{{ $totalServiceProviders }}</p>
                <p class="text-gray-600">Total Service Providers</p>
            </div>
        </div>

        <!-- Table Section -->
        <div class="space-y-5">
            <x-table table_name=" Manage Service Providers" :dataset="$firstFive" url="staff" />
            <x-table table_name=" Manage Admins" :dataset="$fistFiveAdmins" url="admin" />
        </div>

    </div>
</x-layouts.layout>