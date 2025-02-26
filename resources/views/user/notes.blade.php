<x-admin-layout>
    <!-- Container for the Create Notes Button -->
    <div class="container mt-4">
        <button class="btn btn-primary mb-4">
            <a href="{{ route('notes.create') }}" class="text-white text-decoration-none">Create Notes</a>
        </button>

        <!-- Table for displaying notes -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
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
                            <td class="text-secondary">{{ $note->title }}</td>
                            <td class="text-secondary">{{ Str::limit($note->content, 50) }}</td>
                            <td class="text-secondary">last updated{{ $note->updated_at->format('d/m/Y H:i') }}</td>
                            <td class="text-secondary ">

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
    </div>
</x-admin-layout>
