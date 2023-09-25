<?php require base_path('Views\Partials\header.php'); ?>
<?php require base_path('Views\Partials\nav.php'); ?>
<?php require base_path('Views\Partials\banner.php'); ?>

<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($todos as $todo): ?>
                <h1 class="text-xl text-blue-500 hover:underline"><a
                            href="/todo?id=<?= $todo['id'] ?>"><?= $todo['title'] ?></a></h1>
                <p class="text-xl text-blue-500 hover:underline"><?= $todo['done'] ? 'Completed' : 'Not Completed' ?></p>
            <?php endforeach; ?>
        </div>
    </main>
</div>


<?php require base_path('Views\Partials\footer.php'); ?>






