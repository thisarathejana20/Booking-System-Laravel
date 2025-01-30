<x-layouts.layout>
    <div>
        <form action="/search-staff" method="POST">
            @csrf
            <input type="text" name="q" placeholder="Search by staff email">
        </form>
    </div>
</x-layouts.layout>