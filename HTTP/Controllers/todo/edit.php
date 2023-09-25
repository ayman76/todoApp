<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$todo = $db->query('select * from todos where id = :id', [
    'id' => $_GET['id'],
])->findOrFail();

view('todos/edit.view.php', [
    'heading' => 'Edit Todo: ' . $todo['title'],
    'todo' => $todo
]);

