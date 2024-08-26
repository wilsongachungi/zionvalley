<x-admin-layout>
    <br>
    <br> <br>

    `	 @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
            role="alert">
            <span>{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Harambee</th>
                    <!-- Add other columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            @php
                                // Filter harambees for the current user
                                $userHarambees = $harambees->filter(function ($harambee) use ($user) {
                                    return $harambee->sent_to == $user->id;
                                });
                            @endphp

                            @if ($userHarambees->isEmpty())
                                No Harambees
                            @else
                                @foreach ($userHarambees as $harambee)
                                    <div class="mb-3"> <!-- Margin-bottom to add space between items -->
                                        <div><strong class="ml-2">Harambee:</strong> {{ $harambee->harambees }}</div>
                                        <div><strong>Created At:</strong> {{ $harambee->created_at }}</div>
                                        <div class="mt-2">
                                            <!-- Edit button with icon -->
                                            <a href="#" class="btn btn-primary btn-sm"
                                                onclick="toggleEditForm({{ $harambee->id }})">
                                                Edit
                                            </a>

                                            <div id="editForm_{{ $harambee->id }}" style="display:none;">
                                                <form action="{{ route('harambee.update', $harambee->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="harambees">Harambee Amount</label>
                                                        <input type="number" class="form-control text-light"
                                                            id="harambees_{{ $harambee->id }}" name="harambee"
                                                            value="{{ $harambee->harambees }}" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                                    <button type="button" class="btn btn-secondary mt-3"
                                                        onclick="toggleEditForm({{ $harambee->id }})">Cancel</button>
                                                </form>
                                            </div>

                                            <!-- Delete button with icon -->
                                            <form action="{{ route('harambee.destroy', ['id' => $harambee->id]) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>

                                            
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <script>
            function toggleEditForm(id) {
                var form = document.getElementById('editForm_' + id);
                form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
            }
        </script>
</x-admin-layout>
