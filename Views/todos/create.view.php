<?php require base_path('Views\Partials\header.php'); ?>
<?php require base_path('Views\Partials\nav.php'); ?>
<?php require base_path('Views\Partials\banner.php'); ?>

<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 bg-white rounded-xl m-6">
            <form action="/todos" method="post">
                <input type="hidden" name="listId" value="<?= $_SESSION['list'] ?>">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="title" id="title"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " value="<?= $_POST['title'] ?? '' ?>"/>
                    <label for="title"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Title</label>
                </div>

                <?php if (isset($errors['title'])) : ?>
                    <p class="text-red-500 text-xs mb-3"><?= $errors['title'] ?></p>
                <?php endif; ?>

                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </form>

        </div>
    </main>
</div>


<?php require base_path('Views\Partials\footer.php'); ?>





