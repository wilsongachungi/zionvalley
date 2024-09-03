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
                @foreach ($harambees->groupBy('user_id') as $userHarambees)
                    @php
                        $user = $userHarambees->first()->user;
                    @endphp
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <button onclick="toggleHistory({{ $user->id }})" class="focus:outline-none">
                                {{ $user->name }}
                            </button>
                        </th>
                        <td class="px-6 py-4">{{ $userHarambees->count() }} Entries</td>
                        <td colspan="2" class="px-6 py-4"></td>
                    </tr>
                    <tr id="harambee-history-{{ $user->id }}" class="bg-gray-50 dark:bg-gray-900 hidden">
                        <td colspan="4" class="p-0">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                @foreach ($userHarambees as $harambee)
                                    <tr class="border-t dark:border-gray-700">
                                        <td class="px-6 py-3">{{ $harambee->harambees }}</td>
                                        <td class="px-6 py-3">{{ $harambee->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="px-6 py-3 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<script>
	function toggleHistory(userId) {
		const element = document.getElementById(`harambee-history-${userId}`);
		element.classList.toggle('hidden');
	}
</script>
</html>
