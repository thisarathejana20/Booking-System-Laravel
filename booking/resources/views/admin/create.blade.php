<x-layouts.layout>
    <form action="/admin-create/{{$user->id}}" method="POST">
        @csrf
        <div class="space-y-6 bg-gray-800 p-6 rounded-lg shadow-lg">
            <!-- Name Field -->
            <div>
                <label for="name" class="block text-white font-medium">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-white font-medium">Email:</label>
                <input type="text" id="email" name="email" value="{{ $user->email }}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out">Proceed
                To make {{$user->name}} an Admin</button>
            <button type="reset"
                class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out">Cancel</button>
        </div>

    </form>
</x-layouts.layout>