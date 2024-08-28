<x-admin-layout>
<button class="btn btn-primary mt-10 "><a href="{{ route('notes.create') }}">Create Notes </a></button>
<div class="container">
    <h5 class="mb-4 mt-3">Notes</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ Str::limit($note->content, 50) }}</td>
                    <td>{{ $note->created_at->format('d/m/Y H:i') }}</td>
                    <td>
						<a href="">Show</a>
						<a href="">Delete</a>
						<a href="">Edit</a>
					</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-admin-layout>
