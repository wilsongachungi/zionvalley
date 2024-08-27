<br> <br> <br> <x-admin-layout>
    <br><br><br>
    <div class="flex justify-center w-full">
        <div class="flex justify-center w-1/2 p-4 rounded bg-gray-800">
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
					<label for="comment">Comment</label>
					<textarea class="form-control rounded text-white" id="comment" name="comment"
						placeholder="Enter your comment" rows="3" style="resize: vertical;" required></textarea>
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
                        // ['link', 'image'],
                        [{
                            'color': []
                        }, {
                            'background': []
                        }],
                        ['clean']
                    ]
                }
            });

            var form = document.querySelector('form');
            form.onsubmit = function() {
                var quillContent = document.querySelector('#quill-content');
                quillContent.value = quill.root.innerHTML;

                // Debugging: Check what is being submitted
                console.log("Submitting Comment:", quillContent.value);

                if (quillContent.value.trim() === '') {
                    alert('Comment field cannot be empty.');
                    return false; // Prevent form submission if the comment is empty
                }
            };
        });
    </script>

</x-admin-layout>
