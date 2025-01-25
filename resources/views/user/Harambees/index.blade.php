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
                        Comments
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($harambees as $userId => $userHarambees)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <!-- Show the user name once -->
                        <td class="px-6 py-4" rowspan="{{ count($userHarambees) }}">
                            {{ $userHarambees->first()->user->name }}
                        </td>

                        <!-- Show the first Harambee entry -->
                        <td class="px-6 py-4">
                            {{ $userHarambees->first()->harambees }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $userHarambees->first()->comment ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $userHarambees->first()->created_at }}
                        </td>
                        <td class="text-secondary ">
                            <a href="{{ route('harambees.edit', $userHarambees->first()->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('harambees.destroy', $userHarambees->first()->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this harambee?')">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Toggle for remaining Harambee entries -->
                    @foreach ($userHarambees->slice(1) as $harambee)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $harambee->harambees }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $harambee->comment ?? 'N/A' }}
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
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('credit_harambee') }}" class="btn btn-primary mt-3 ml-1 text-white">
        Credit Harambee
    </a>

</body>

</html>
