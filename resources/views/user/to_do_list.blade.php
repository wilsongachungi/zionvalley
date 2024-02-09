@section('css')
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            margin-top: 10px;
        }

        .input-field {
            width: 100%;
            min-height: 100px;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .submit-button {
            padding: 8px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
@endsection

<x-admin-layout>
    <div class="form-container" style="margin-left: 40px">
        <h1>Message and Comment</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{ route('storeTask') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="userSelect">Assign Task To:</label>
            <select id="userSelect" name="user_id" class="text-black">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <label for="commentInput">Tasks:</label>
            <textarea type="text" id="commentInput" name="description" class="input-field text-black" placeholder="Add a comment"
                required></textarea>

            <label for="messageInput">Message:</label>
            <textarea type="text" id="messageInput" name="message" class="input-field text-black" placeholder="Type your message"
                required></textarea>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</x-admin-layout>
