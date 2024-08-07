<x-admin-layout>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Identification</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Who They Say They Are..</th>
                                    <th>Existing Comment</th>
                                    <th>Add/Edit a Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($identity as $record)
                                    <tr>
                                        <td>{{ $record->user->name ?? 'Unknown' }}</td> 
                                        <td>{{ $record->identify_data }}</td>
                                        <td>
                                            {{-- Display existing comment if available --}}
                                            {{ $comments->get($record->user_id)->comment ?? 'No comment' }}
                                        </td>
                                        <td>
                                            <form action="{{ route('store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $record->user_id }}">
                                                <textarea name="comment" rows="3" class="form-control text-light" placeholder="Add a comment...">{{ $comments->get($record->user_id)->comment ?? '' }}</textarea>
                                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr style="border: 1px solid #ddd; background-color: #F5F5F5; color: #000;">
                                        <td colspan="4" style="border: 1px solid #ddd;">There is no data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
