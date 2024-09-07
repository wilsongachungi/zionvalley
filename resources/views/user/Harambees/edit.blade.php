<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harambee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="max-w-2xl mx-auto my-10 p-5 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-6">Edit Harambee</h2>

        <!-- Form to edit a Harambee -->
        <form action="{{ route('harambees.update', $harambee->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Since it's an update, we need to simulate a PUT request -->

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $harambee->user->name) }}"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Harambees Input -->
            <div class="mb-4">
                <label for="harambees" class="block text-sm font-medium text-gray-700">Harambees</label>
                <input type="number" id="harambees" name="harambees" value="{{ old('harambees', $harambee->harambees) }}"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Date Input -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" id="date" name="date" value="{{ old('date', $harambee->created_at->format('Y-m-d')) }}"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Update Harambee
                </button>
            </div>
        </form>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('harambees.index') }}"
               class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                Back to List
            </a>
        </div>
    </div>

</body>

</html>
