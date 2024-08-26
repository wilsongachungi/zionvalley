<br><x-admin-layout>
    <!-- Quill's Stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Quill's JavaScript -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <br> <br><br>
    <div class="flex justify-center w-full">
        <div class="flex justiffy-center w-1/2 p-4 rounded bg-gray-800">
            <form class="w-full" action="{{ route('upload_harambee') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="harambees">Credit Harambees</label>
                    <input type="number" class="form-control rounded text-white" id="harambees" name="harambees"
                        placeholder="Enter harambees amount" required>
                </div>

                <div class="form-group">
                    <label for="user_id">Select User</label>
                    <select class="form-control rounded text-white" id="sent_to" name="sent_to" required>
                        <option value="" disabled selected>Select a user</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="editor">Comment</label>
                    <div id="editor" style="min-height: 50px; max-height: 300px; overflow-y: auto;" class="rounded">
                    </div>
                    <input type="hidden" name="content" id="quill-content">
                </div>
                <button type="submit" class="btn btn-primary text-lg mt-3">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': '1'
                        }, {
                            'header': '2'
                        }],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['bold', 'italic', 'underline'],
                        [{
                            'align': []
                        }],
                        ['link', 'image'],
                        [{
                            'color': []
                        }, {
                            'background': []
                        }],
                        ['clean']
                    ]
                }
            });
        });
    </script>

</x-admin-layout>
