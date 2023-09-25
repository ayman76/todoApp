<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$attributes = [
    'title' => $_POST['title'],
    'id' => $_POST['id'],
];

$todo = $db->query("select * from todos where id = :id", [
    'id' => $_POST['id'],
])->findOrFail();

//Validate Input
$errors = [];
if (!Validator::string($attributes['title'], 1, 255)) {
    $errors['title'] = "Please title must be not empty or greater than 255 characters";
}

if (!empty($errors)) {
    view('todos/edit.view.php',
        [
            'errors' => $errors,
            'heading' => "Edit todo:" . $todo['title'],
            'todo' => $todo
        ]
    );
} else {
    $db->query("update todos set title = :title where id = :id", [
        'title' => $_POST['title'],
        'id' => $_POST['id'],
    ]);

    redirect("/list?id={$_SESSION['list']}");

}


