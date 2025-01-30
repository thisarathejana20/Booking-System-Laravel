<x-layouts.layout>
    <form action="/staff-update/{{$user->id}}" method="POST">
        @csrf
        @method('put')
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

            <!-- Title Field -->
            <div>
                <label for="title" class="block text-white font-medium">Title:</label>
                <input type="text" id="title" name="title" value="{{$user->title}}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>

            <!-- Role Field -->
            <div>
                <label for="role" class="block text-white font-medium">Role:</label>
                <input type="text" id="role" name="role" value="{{$user->role}}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>

            <!-- Work Place Field -->
            <div>
                <label for="works_at" class="block text-white font-medium">Work Place:</label>
                <input type="text" id="works_at" name="works_at" value="{{$staff->works_at}}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>

            <!-- Resource Select -->
            <div>
                <label for="resource" class="block text-white font-medium">Resource:</label>
                <select name="resource" id="resource"
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
                    @foreach($resources as $resource)
                        <option value="{{ $resource->id }}">{{ $resource->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Experience Field -->
            <div>
                <label for="experience" class="block text-white font-medium">Experience:</label>
                <input type="text" id="experience" name="experience" value="{{$staff->experience}}" required
                    class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 ease-in-out">
            </div>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out">Update</button>
            <button type="reset"
                class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-300 ease-in-out">Reset</button>
        </div>

    </form>
</x-layouts.layout>