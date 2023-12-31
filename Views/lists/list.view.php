<?php require base_path('Views\Partials\header.php'); ?>
<?php require base_path('Views\Partials\nav.php'); ?>
<?php require base_path('Views\Partials\banner.php'); ?>

<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <a href="/todos/create">
                <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add List
                </button>
            </a>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase  bg-gray-50 light:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Done
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($todos as $todo): ?>

                        <tr class="bg-white border-b pb-6">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <p><?= $todo['title'] ?></p>
                            </th>

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <?php if ($todo['done']): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                         style="fill: #0ac521">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                    </svg>
                                <?php else: ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                    </svg>
                                <?php endif; ?>
                            </th>

                            <td class="px-6 py-4">
                                <a href="/todo/edit?id=<?= $todo['id'] ?>"
                                   class="font-medium text-blue-600 hover:underline mr-3">Edit</a>
                                <button onclick="document.querySelector('#delete-form<?= $todo['id'] ?>').submit()"
                                        class="font-medium text-red-600 hover:underline">Delete
                                </button>
                            </td>
                        </tr>

                        <form action="/todo" method="post" class="hidden" id="delete-form<?= $todo['id'] ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                        </form>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>


<?php require base_path('Views\Partials\footer.php'); ?>






