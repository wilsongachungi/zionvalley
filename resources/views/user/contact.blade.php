<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl">Contact</h1>
    </x-slot>

    <div class="container">
        <div class="container">
            <h2>Main Content</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
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
                            <td>{{ $record->phone }}</td>
                            <td>{{ $record->message }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">There is no data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="pagination">
                <button class="active" onclick="changePage(1)">1</button>
                <button onclick="changePage(2)">2</button>
                <button onclick="changePage(3)">3</button>
                <!-- Add more pagination buttons as needed -->
            </div>
            </main>
        </div>
</x-app-layout>
