<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$title = trim($_POST['title']);
//dd($title);
//Validate input
$errors = [];
if (!Validator::string($title)) {
    $errors['title'] = "Please title must be not empty or greater than 255 characters";
}

if (!empty($errors)) {
    view('lists/create.view.php',
        [
            'errors' => $errors,
            'heading' => "New List"
        ]
    );
} else {
    $db->query("insert into lists(title) VALUES(:title)", [
        'title' => $title,
    ]);

    redirect('/lists');

}

