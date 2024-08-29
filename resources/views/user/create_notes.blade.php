<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaVF7srkiW3A6t07q9WwJAPQ44EhlYxSvD/NtzT1gIN8dHkfvFpNVL0NgkD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+7HAuoFY5JYlER44pV79G5C1I1bB8" crossorigin="anonymous">
    </script>
    <title>Note</title>
</head>

<body>
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
                    <div id="editor" class="bg-black text-light" style="height: 200px;"></div>
                    <input type="hidden" name="content" id="quill-content">
                </div>
                <button type="submit" class="btn btn-success mt-4">Save</button>
            </form>
        </div>
    </div>

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
</body>

</html>
