<x-admin-layout>
    <br> <br>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Downloads') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Upload Form -->
                <form action="{{ route('add_downloads') }}" method="POST" enctype="multipart/form-data"
                    class="bg-dark p-3 rounded">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="text-light">Title:</label>
                        <input type="text" class="form-control bg-secondary text-light" name="title" id="title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="file" class="text-light">File:</label>
                        <input type="file" class="form-control-file" name="file" id="file" required>
                    </div>
                    <div class="form-group">
                        <label for="access_level" class="text-light">Access Level:</label>
                        <select class="form-control bg-secondary text-light" name="access_level" id="access_level"
                            required>
                            <option value="normal">Normal Users</option>
                            <option value="authenticated">Authenticated Users Only</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Download</button>
                </form>
            </div>
        </div>
        <div class="container mt-5 d-flex flex-column" style="max-height: 300px; overflow-y: auto;">
            <div class="card">
                <div class="card-header">Uploaded Items</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Document</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($downloads as $download)
                            <tr>
                                <td>{{ $download->title }}</td>
                                <td><a href="{{ asset('downloads/' . $download->file_path) }}" download="{{ $download->file_name }}">Download</a></td>

                                <td>
                                    <!-- Delete button and Edit link -->
                                    <form action="{{ route('delete_download', $download->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a href="{{ route('edit_download', $download->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>