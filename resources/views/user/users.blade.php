<x-admin-layout>
    <br>
    <br> <br>
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
                                </div>
                            @endforeach
                        @endif
                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
</x-admin-layout>
