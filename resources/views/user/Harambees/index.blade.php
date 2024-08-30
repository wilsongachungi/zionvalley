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
					<th scope="col" class="px-6 py-3">Name</th>
					<th scope="col" class="px-6 py-3">Harambees</th>
					<th scope="col" class="px-6 py-3">Created</th>
					<th scope="col" class="px-6 py-3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($harambees as $harambee)
				<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
					<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $harambee->user->name }}</th>
					<td class="px-6 py-4">{{ $harambee->harambees }}</td>
					<td class="px-6 py-4">{{ $harambee->created_at->format('d/m/Y H:i') }}</td>
					<td class="px-6 py-4 text-right">
						<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
						<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>

</html>
