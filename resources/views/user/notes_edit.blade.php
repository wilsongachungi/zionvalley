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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <title>Edit Note</title>
</head>

<body>
    <div class="container mt-4 bg-dark">
        <h5 class="mb-4 text-primary">Edit Note</h5>
        <form action="{{ route('notes.update', $notes->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" value="{{ $notes->title }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <!-- Hidden input to store the actual HTML content -->
                <input type="hidden" name="content" id="content" value="{{ $notes->content }}">
                <!-- Quill editor container -->
                <div id="editor" style="min-height: 300px;">{!! $notes->content !!}</div>
            </div>

            <button type="submit" class="btn btn-warning btn-sm">Save</button>
        </form>

        <form action="{{ route('notes.destroy', $notes->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm mt-3"
                onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
        </form>
    </div>

    <script>
        // Initialize Quill editor with a custom toolbar
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                    ['blockquote', 'code-block'],

                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }], // superscript/subscript
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }], // outdent/indent
                    [{
                        'direction': 'rtl'
                    }], // text direction

                    [{
                        'size': ['small', false, 'large', 'huge']
                    }], // custom dropdown
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],

                    [{
                        'color': []
                    }, {
                        'background': []
                    }], // dropdown with defaults from theme
                    [{
                        'font': []
                    }],
                    [{
                        'align': []
                    }],

                    ['clean'], // remove formatting button

                    ['link', 'image', 'video'] // link and image, video
                ]
            }
        });

        // Set the content of Quill editor with the existing note content
        quill.clipboard.dangerouslyPasteHTML(document.getElementById('content').value);

        // On form submit, update the hidden input with the Quill editor content
        document.querySelector('form').onsubmit = function() {
            document.getElementById('content').value = quill.root.innerHTML;
        };
    </script>
</body>

</html>
