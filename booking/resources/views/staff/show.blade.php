<x-layouts.layout>
    <div
        class="max-w-sm mx-auto bg-white shadow-xl rounded-lg overflow-hidden mt-6 px-5 py-5 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="px-6 py-4">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">{{ $user_details->name }}</h2>
            <p class="text-gray-600 text-base mb-4">{{ $user_details->title }}</p>
            <p class="text-gray-700 text-base"><strong class="font-semibold">Works at:</strong>
                {{ $work_details->works_at }}</p>
            <p class="text-gray-700 text-base"><strong class="font-semibold">Experience:</strong>
                {{ $work_details->experience }}</p>
        </div>
        <form action="/booking/{{ $work_details->id }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="appointment_time" class="block text-sm font-medium text-gray-700">Appointment Time</label>
                <input type="datetime-local" name="appointment_time" id="appointment_time" required
                    value="{{ old('appointment_time', now()->format('Y-m-d\TH:i')) }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <button type="submit"
                class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                Reserve your Time Now
            </button>
        </form>
    </div>
</x-layouts.layout>