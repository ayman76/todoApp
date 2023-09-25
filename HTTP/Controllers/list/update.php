<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$attributes = [
    'title' => $_POST['title'],
    'id' => $_POST['id'],
];

$list = $db->query("select * from lists where id = :id", [
    'id' => $_POST['id'],
])->findOrFail();

//Validate Input
$errors = [];
if (!Validator::string($attributes['title'], 1, 255)) {
    $errors['title'] = "Please title must be not empty or greater than 255 characters";
}

if (!empty($errors)) {
    view('lists/edit.view.php',
        [
            'errors' => $errors,
            'heading' => "New List",
            'list' => $list
        ]
    );
} else {
    $db->query("update lists set title = :title where id = :id", [
        'title' => $_POST['title'],
        'id' => $_POST['id'],
    ]);

    redirect('/lists');

}


