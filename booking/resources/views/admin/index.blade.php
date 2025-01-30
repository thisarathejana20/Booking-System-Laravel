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

        <!-- Manage Service Providers Section -->
        <div class="bg-white p-6 rounded-xl shadow-lg">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Manage Service Providers</h1>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($firstFive as $provider)
                        <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->id }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->user->name }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->user->email }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                <a href="/staff-edit/{{ $provider->id}}"
                                    class="text-indigo-600 hover:text-indigo-800 transition-colors duration-200 ease-in-out">
                                    Edit
                                </a>

                                <form action="/staff-delete/{{ $provider->id}}" class="inline-block" id="delete-btn"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" form="delete-btn"
                                        class="ml-4 text-red-600 hover:text-red-800 transition-colors duration-200 ease-in-out">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.layout>