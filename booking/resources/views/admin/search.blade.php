<x-layouts.layout>
    <div>
        <form action="/search-admin" method="POST">
            @csrf
            <input type="text" name="q" placeholder="Search by admin email">
        </form>
    </div>
</x-layouts.layout>