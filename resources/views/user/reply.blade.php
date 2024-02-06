<x-admin-layout>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Messages</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userMessages as $message)
                                    <tr>
                                        <td>{{ $message->user->name }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>
                                            @if (empty($message->admin_reply))
                                                <form action="{{ route('feedback', ['messageId' => $message->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea name="admin_reply" rows="3" class="form-control" placeholder="Enter admin reply"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-sm">Reply</button>
                                                </form>
                                            @else
                                                {{ $message->admin_reply }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
