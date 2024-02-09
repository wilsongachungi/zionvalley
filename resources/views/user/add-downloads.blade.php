<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Downloads') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
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
                    <button type="submit" class="btn btn-primary">Add Download</button>
                </form>
            </div>
        </div>
    </div>




</x-admin-layout>
