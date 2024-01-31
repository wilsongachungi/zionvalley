<x-base-layout>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>ID Number</th>
                <th>Age</th>
                <th>Category</th>
                <th>Passport Image</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($job as $record)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->phone }}</td>
                    <td>{{ $record->country }}</td>
                    <td>{{ $record->idnumber }}</td>
                    <td>{{ $record->age }}</td>
                    <td>{{ $record->select }}</td>
                    <td>{{ $record->passport_image }}</td>
                </tr>
            @empty
                <tr class="text-white">
                    <td colspan="9">
                        <div class="flex justify-center">
                            There is no data
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-base-layout>
