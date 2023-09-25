<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$title = $_POST['title'];

$errors = [];
if (!Validator::string($title, 1, 255)) {
    $errors['title'] = "Please title must be not empty or greater than 255 characters";
}
if (!empty($errors)) {
    view('todos/create.view.php', [
        'heading' => 'New Todo',
        'errors' => $errors,
    ]);
}

$db->query("insert into todos (title, list_id) VALUES (:title, :list_id)", [
    'title' => $title,
    'list_id' => $_SESSION['list'],
]);

redirect("/list?id={$_SESSION['list']}");