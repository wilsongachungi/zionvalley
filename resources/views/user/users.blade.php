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
    <div class="mt-5 mb-2">
        <h5 class="text-left ml-2">Users</h5>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="ml-2 block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for items">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Identity Data
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Admin Comment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-{{ $index }}" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-{{ $index }}" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->identify ? $user->identify->identify_data : 'No data' }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($user->adminComments->isEmpty())
                                No comments
                            @else
                                @foreach ($user->adminComments as $comment)
                                    <div class="mb-2">
                                        <span>{{ $comment->comment }}</span>

                                    </div>
                                @endforeach
                            @endif
                        </td>
                        <!-- Add Edit button -->



                        <td class="px-6 py-4">
                            <!-- Show "Edit Comment" button if a comment exists -->
                            @if ($user->adminComments->isNotEmpty())
                                @foreach ($user->adminComments as $comment)
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm edit-comment-btn"
                                        data-modal-target="default-modal" data-user-id="{{ $user->id }}"
                                        data-comment-id="{{ $comment->id }}"
                                        data-comment="{{ $comment->comment }}">Edit</a>
                                @endforeach
                            @else
                                <!-- Show "Add Comment" button if no comment exists -->
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm comment-btn"
                                    data-modal-target="default-modal" data-user-id="{{ $user->id }}">Comment</a>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Admin Comment
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal" id="close-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form id="comment-form" method="POST" action="{{ route('store') }}">
                        @csrf
                        <input type="hidden" name="user_id" id="comment-user-id">
                        <input type="hidden" name="comment_id" id="comment-id"> <!-- Hidden input for comment ID -->

                        <div class="p-4 md:p-5 space-y-4">
                            <textarea name="comment" id="comment" class="w-full p-2 border rounded-lg" rows="4"
                                placeholder="Enter your comment..." required></textarea>
                        </div>
                        <div
                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit
                            </button>
                            <button type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                id="close-modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- JavaScript -->


        <script>
            document.querySelectorAll('.comment-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const userId = this.getAttribute('data-user-id');
                    const modal = document.getElementById('default-modal');
                    document.getElementById('comment-user-id').value = userId;
                    document.getElementById('comment-id').value = ''; // Clear comment ID for new comments
                    document.getElementById('comment').value = ''; // Clear comment text for new comments
                    modal.classList.remove('hidden');
                });
            });

            document.querySelectorAll('.edit-comment-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const userId = this.getAttribute('data-user-id');
                    const commentId = this.getAttribute('data-comment-id');
                    const commentText = this.getAttribute('data-comment');
                    const modal = document.getElementById('default-modal');

                    // Populate the modal with the comment data for editing
                    document.getElementById('comment-user-id').value = userId;
                    document.getElementById('comment-id').value = commentId;
                    document.getElementById('comment').value = commentText;

                    modal.classList.remove('hidden');
                });
            });

            document.getElementById('close-modal').addEventListener('click', function() {
                const modal = document.getElementById('default-modal');
                modal.classList.add('hidden');
            });
        </script>

</body>

</html>
