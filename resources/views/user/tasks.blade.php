<x-admin-layout>
    <div class="flex justify-center w-full mt-10">
        <div class="flex justify-center w-1/2 p-4 rounded bg-gray-800">
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="text-white ">Title</label>
                    <input type="text" name="title" class="form-control bg-black text-light" required>
                </div>
                <div class="form-group">
                    <label for="content" class="text-white">Content</label>
                    <div id="editor" style="height: 200px; background-color: black; text-white"></div>
                    <input type="hidden" name="content" id="quill-content">
                </div>
                <button type="submit" class="btn btn-success mt-4">Save</button>
            </form>
        </div>
    </div>

    <!-- Quill.js CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Quill.js JavaScript -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Quill editor
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
                        [{
                            'color': []
                        }, {
                            'background': []
                        }],
                        ['clean']
                    ]
                }
            });

            // Handle form submission
            var form = document.querySelector('form');
            form.onsubmit = function() {
                var quillContent = document.querySelector('#quill-content');
                quillContent.value = quill.root.innerHTML;

                if (quillContent.value.trim() === '') {
                    alert('Content field cannot be empty.');
                    return false; // Prevent form submission if content is empty
                }
            };
        });
    </script>
</x-admin-layout>


