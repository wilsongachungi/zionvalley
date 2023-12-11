<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl">Involve</h1>
    </x-slot>

    <div class="container">
        <h2>Main Content</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>IDnumber</th>
                    <th>Age</th>
                    <th>Category</th>
                    <th>IDphoto</th>
                    <th>Passport</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add more rows as needed -->
                @forelse ($involves as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->country }}</td>
                        <td>{{ $record->idnumber }}</td>
                        <td>{{ $record->age }}</td>
                        <td>{{ $record->idphoto }}</td>
                        <td>{{ $record->select }}</td>
                        <td>{{ $record->passport }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">There is no data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{-- Use laravel paginate - it's better and cleaner --}}
            {{-- {{ $involves->links() }} --}}
            <button class="active" onclick="changePage(1)">1</button>
            <button onclick="changePage(2)">2</button>
            <button onclick="changePage(3)">3</button>
        </div>
    </div>
</x-app-layout>
