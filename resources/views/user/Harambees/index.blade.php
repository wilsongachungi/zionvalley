<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harambee List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
						<td class="px-6 py-4">
							<!-- Delete Button -->
							<form action="{{ route('harambees.destroy', $harambee->id) }}" method="POST"
								onsubmit="return confirm('Are you sure you want to delete this Harambee?');" class="inline-block">
								@csrf
								@method('DELETE')
								<button type="submit"
									class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
									Delete
								</button>
							</form>

							<!-- Edit Button -->
							<a href="{{ route('harambees.edit', $harambee->id) }}"
								class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
								Edit
							</a>
						</td>

                </tbody>
            @endforeach
        </table>
    </div>

    <a href="{{ route('credit_harambee') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg inline-block mt-10 text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</a>

</body>

</html>
