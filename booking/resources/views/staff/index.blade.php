<x-layouts.layout>
    @foreach ($staff as $member)
        <a href="/staff/{{$member->id}}" class="block hover:scale-105 transform transition duration-300 ease-in-out">
            <div
                class="bg-slate-500 shadow-lg rounded-lg p-6 m-4 hover:bg-slate-400 hover:shadow-2xl transition-all duration-300">
                <h1 class="text-2xl font-semibold text-white mb-4">{{ $member->name }}</h1>
                <p class="text-gray-200">{{ $member->title }}</p>
            </div>
        </a>
    @endforeach
</x-layouts.layout>