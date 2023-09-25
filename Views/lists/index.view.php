<?php require base_path('Views\Partials\header.php'); ?>
<?php require base_path('Views\Partials\nav.php'); ?>
<?php require base_path('Views\Partials\banner.php'); ?>

<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <a href="/lists/create">
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
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($lists as $list): ?>
                        <tr class="bg-white border-b">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <a href="/list?id=<?= $list['id'] ?>"
                                   class="text-black hover:text-blue-500 hover:underline"><?= $list['title'] ?></a>
                            </th>
                            <td class="px-6 py-4">
                                <a href="/list/edit?id=<?= $list['id'] ?>"
                                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                                <button onclick="document.querySelector('#delete-form').submit()"
                                        class="font-medium text-red-600 hover:underline">Delete
                                </button>
                            </td>
                        </tr>

                        <form action="/list" method="post" class="hidden" id="delete-form">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $list['id'] ?>">
                        </form>

                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>


<?php require base_path('Views\Partials\footer.php'); ?>





