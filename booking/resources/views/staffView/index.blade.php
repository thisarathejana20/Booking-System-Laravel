<x-layouts.layout>
    <div class="max-w-lg mx-auto rounded-xl shadow-lg overflow-hidden">
        <div class="bg-white p-6 pt-16 rounded-t-xl relative">
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2">
                <img src="{{asset('storage/' . $staff->profile_picture)}}" alt="Profile Picture"
                    class="w-32 h-32 rounded-full border-4 border-white shadow-xl object-cover">
            </div>
            <form action="/staff-pic" method="POST" enctype="multipart/form-data" class="mt-36">
                @csrf
                <input type="file" name="profile_picture" accept="image/*" required class="block w-full text-sm mb-4">
                <button type="submit"
                    class="flex items-center justify-center w-full h-10 bg-purple-500 hover:bg-purple-600 text-sm font-medium rounded-xl">
                    Change Profile Picture
                </button>
            </form>
            <h1 class="text-4xl font-semibold text-gray-800 text-center mt-6">{{$user->name}}</h1>
            <p class="text-gray-600 text-center mt-2">{{$user->email}}</p>
        </div>

        <div class="bg-gray-50 p-6 rounded-b-xl">
            <div class="flex items-center space-x-4 mb-4">
                <p class="text-gray-700 font-medium">{{$staff->works_at}}</p>
            </div>
            <div class="flex items-center space-x-4">
                <p class="text-gray-700 font-medium">{{$staff->experience}} years</p>
            </div>
        </div>
    </div>
    <div>
        <h1 class="text-lg font-bold">You have {{count($bookings)}} appointments...</h1>
        <div>
            @foreach($bookings as $appointment)
                <div class="border-b p-4 flex justify-between items-center bg-white shadow-md rounded-lg">
                    <p class="text-lg font-semibold text-gray-700">Time: {{ $appointment->appointment_time }}</p>
                    <form action="/booking-complete/{{$appointment->id}}" method="POST">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300">Mark
                            as Complete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.layout>