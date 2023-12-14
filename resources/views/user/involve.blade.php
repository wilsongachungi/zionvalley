<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl">Involve</h1>
		<style>
			*{
				background-color: #000;
			}
		</style>
    </x-slot>

    <div class="container">
        <h2>Main Content</h2>
        <table>
            <thead>
                <tr>
                    <th style="color:green">ID</th>
                    <th style="color:green">Name</th>
                    <th style="color:green">Email</th>
                    <th style="color:green">Phone</th>
                    <th style="color:green">Country</th>
                    <th style="color:green">IDnumber</th>
                    <th style="color:green">Age</th>
                    <th style="color:green">Category</th>
                    <th style="color:green">IDphoto</th>
                    <th style="color:green">Passport</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add more rows as needed -->
                @forelse ($involves as $record)
                    <tr>
                        <td style="color:#fff;">{{ $record->id }}</td>
                        <td style="color:#fff;">{{ $record->name }}</td>
                        <td style="color:#fff;">{{ $record->email }}</td>
                        <td style="color:#fff;">{{ $record->phone }}</td>
                        <td style="color:#fff;">{{ $record->country }}</td>
                        <td style="color:#fff;">{{ $record->idnumber }}</td>
                        <td style="color:#fff;">{{ $record->age }}</td>
                        <td style="color:#fff;">{{ $record->idphoto }}</td>
                        <td style="color:#fff;">{{ $record->select }}</td>
                        <td style="color:#fff;">{{ $record->passport_image }}</td>
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
