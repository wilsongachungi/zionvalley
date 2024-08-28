@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $note->title) }}"
                    required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <div id="editor" style="height: 200px;"></div>
                <input type="hidden" name="content" id="quill-content" value="{{ old('content', $note->content) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
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
                        [{
                            'color': []
                        }, {
                            'background': []
                        }],
                        ['clean']
                    ]
                }
            });

            // Set initial content
            quill.root.innerHTML = document.querySelector('#quill-content').value;

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
@endsection
