<x-admin-layout>
    <button class="btn btn-primary mt-10">
        <a href="{{ route('notes.create') }}" class="text-white text-decoration-none">Create Notes</a>
    </button>
    <div class="container mt-4">
        <h5 class="mb-4">Notes</h5>
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
                            <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
