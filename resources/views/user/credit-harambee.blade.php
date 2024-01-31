<x-admin-layout>
    <div class="flex justify-center w-full">
        <div class="flex justiffy-center w-1/2 p-4 rounded bg-gray-800">
            <form class="w-full" action="{{ route('upload_harambee') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="deposit">Deposit</label>
                    <input type="number" class="form-control rounded text-white" id="deposit" name="deposit"
                        placeholder="Enter deposit amount" required>
                </div>

                <div class="form-group">
                    <label for="withdrawn">Withdrawn</label>
                    <input type="number" class="form-control rounded text-white" id="withdrawn" name="withdrawn"
                        placeholder="Enter withdrawal amount" required>
                </div>

                <div class="form-group">
                    <label for="harambees">Harambees</label>
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
                <button type="submit" class="btn btn-primary text-lg mt-3">Submit</button>
            </form>
        </div>
    </div>
</x-admin-layout>
