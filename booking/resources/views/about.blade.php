<x-layouts.layout>
    <!-- About Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">About Our Booking System</h2>
            <p class="text-xl text-gray-600 mb-8">A simple and efficient booking system designed to make scheduling
                easier for both staff and clients.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/schedule.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Easy Scheduling</h3>
                <p class="text-gray-600">Book appointments quickly and easily with an intuitive interface that allows
                    you to select times, dates, and staff in just a few clicks.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/time.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Real-Time Availability</h3>
                <p class="text-gray-600">Our system ensures that the availability of staff is always up-to-date, so you
                    can book without worrying about overlapping appointments.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/notification.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Notifications</h3>
                <p class="text-gray-600">Get automated reminders for your appointments, so you never forget about an
                    upcoming meeting or session.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/secure.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Secure and Private</h3>
                <p class="text-gray-600">We prioritize your privacy with secure data storage and encryption, ensuring
                    your appointment details are kept confidential.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/flexible.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Flexible Management</h3>
                <p class="text-gray-600">Easily manage appointments, reschedule or cancel bookings, and keep track of
                    your staff’s calendar from the admin dashboard.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <div class="text-center mb-4">
                    <img src="{{Vite::asset('resources/images/twentyfour.svg')}}" alt="fb" class="h-8 w-8">
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">24/7 Support</h3>
                <p class="text-gray-600">We’re here to help! Our support team is available 24/7 to assist you with any
                    issues or questions you may have.</p>
            </div>
        </div>

        <div class="mt-12 text-center">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Why Choose Us?</h3>
            <p class="text-lg text-gray-600 mx-auto max-w-2xl">Our booking system was designed with both efficiency and
                simplicity in mind. Whether you are a business owner or an individual, our platform helps you manage
                appointments with ease and provides an excellent user experience.</p>
        </div>
    </div>
</x-layouts.layout>