 <br><x-admin-layout>
    <br><br><br>
    <div class="flex justify-center w-full">
        <div class="flex justify-center w-1/2 p-4 rounded bg-gray-800">
            <form class="w-full" action="{{ route('harambee.update', ['id' => $harambee->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT for updating the record -->

                <div class="form-group">
                    <label for="harambees">Credit Harambees</label>
                    <input type="number" class="form-control rounded text-white" id="harambees" name="harambees"
                        placeholder="Enter harambees amount" value="{{ old('harambees', $harambee->harambees) }}" required>
                </div>
                <button type="submit" class="btn btn-primary text-lg mt-3">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>


