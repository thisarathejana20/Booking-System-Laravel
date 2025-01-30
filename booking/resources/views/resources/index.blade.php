<x-layouts.layout>
    @foreach ($resources as $resource)
        <a href="/resources/{{$resource->id}}" class="block hover:scale-105 transform transition duration-300 ease-in-out">
            <div class="bg-slate-800 shadow-lg rounded-lg p-6 m-4 hover:bg-slate-700 transition-colors duration-300">
                <h1 class="text-2xl font-bold text-white mb-4">{{ $resource->name }}</h1>
                <p class="text-gray-300">Channel your doctor now...</p>
            </div>
        </a>
    @endforeach
</x-layouts.layout>