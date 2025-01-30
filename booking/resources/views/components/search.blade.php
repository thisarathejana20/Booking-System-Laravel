@props(['url', 'placeholder'])
<x-layouts.layout>
    <div class="max-w-sm mx-auto mt-6">
        <form action="/search-{{$url}}" method="POST" class="flex items-center bg-white shadow-lg rounded-lg p-4">
            @csrf
            <input type="text" name="q" placeholder="{{$placeholder}}"
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500">
            <button type="submit"
                class="px-6 py-2 ml-2 bg-blue-500 text-white font-semibold rounded-r-lg hover:bg-blue-600 transition duration-300">Search</button>
        </form>
    </div>
</x-layouts.layout>