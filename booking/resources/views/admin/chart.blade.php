<x-layouts.layout>
    <div class="max-w-4xl mx-auto my-6 p-4">
        <!-- First Chart (Bar Chart) -->
        <div class="mb-8 h-96 bg-slate-100 p-5 rounded-lg hover:scale-105 duration-300">
            <canvas id="myChart" class="w-full h-48"></canvas>
        </div>

        <!-- Second Chart (Pie Chart) -->
        <div class="h-80 w-60 bg-slate-100 p-5 rounded-lg hover:scale-105 duration-300">
            <h1 class="text-lg font-bold">Service Providers By Category</h1>
            <canvas id="myChart2" class="w-full h-48"></canvas>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // Change to 'pie' for Pie chart
            data: {
                labels: @json(array_keys($totalBookingsPerDate)), // Example labels
                datasets: [{
                    label: 'Total Bookings As of Previous Days',
                    data: @json(array_values($totalBookingsPerDate)), // Example data
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'pie', // Change to 'pie' for Pie chart
            data: {
                labels: @json(array_keys($staffByField)), // Example labels
                datasets: [{
                    data: @json(array_values($staffByField)), // Example data
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>
</x-layouts.layout>