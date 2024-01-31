<x-admin-layout>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add more rows as needed -->
            @forelse ($contacts as $record)
                <tr style="border: 1px solid #ddd;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->phone }}</td>
                    <td>{{ $record->message }}</td>
                </tr>
            @empty
                <tr class="text-white">
                    <td colspan="8">
                        <div class="flex justify-center">
                            There is no data
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-admin-layout>
