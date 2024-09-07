<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harambee List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harambees
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            @foreach ($harambees as $harambee)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $harambee->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $harambee->harambees }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $harambee->created_at }}
                        </td>
                        <td class="text-secondary ">

                            <a href="{{ route('harambees.edit', $harambee->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('harambees.destroy', $harambee->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this harambee?')">Delete</button>
                            </form>
                        </td>

                </tbody>
            @endforeach
        </table>
    </div>
    <a href="{{ route('credit_harambee') }}" class="btn btn-primary mt-3 ml-1 text-white">
		Back
	</a>

</body>

</html>
