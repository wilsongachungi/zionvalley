<x-base-layout>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Country</th>
                <th scope="col">ID</th>
                <th scope="col">Age</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($involves as $record)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->phone }}</td>
                    <td>{{ $record->country }}</td>
                    <td>{{ $record->idnumber }}</td>
                    <td>{{ $record->age }}</td>
                    <td>{{ $record->select }}</td>
                </tr>
            @empty
                <tr style="border: 1px solid #ddd; background-color: #F5F5F5; color: #000;">
                    <td colspan="9" style="border: 1px solid #ddd;">There is no data</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</x-base-layout>
