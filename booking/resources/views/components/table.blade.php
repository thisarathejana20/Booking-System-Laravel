@props(['dataset', 'table_name', 'url'])
<div class="bg-white p-6 rounded-xl shadow-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">{{$table_name}}</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($dataset as $provider)
                <tr>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->id }}</td>
                    @if ($url === "staff")
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->user->name }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->user->email }}</td>
                    @endif
                    @if($url === "admin")
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->name }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $provider->email }}</td>
                    @endif

                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        <a href="/{{$url}}-edit/{{ $provider->id}}"
                            class="text-indigo-600 hover:text-indigo-800 transition-colors duration-200 ease-in-out">
                            Edit
                        </a>

                        <form action="/{{$url}}-delete/{{ $provider->id}}" class="inline-block" id="delete-btn"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" form="delete-btn"
                                class="ml-4 text-red-600 hover:text-red-800 transition-colors duration-200 ease-in-out">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>