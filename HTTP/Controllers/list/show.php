<?php

use Core\App;
use Core\Database;

$id = $_GET['id'];
$db = App::resolve(Database::class);

$todos = $db->query('select * from todos where list_id = :id', [
    'id' => $id,
])->get();

//dd($todos);

$_SESSION['list'] = $id;

view('lists/list.view.php', [
    'heading' => "List",
    "todos" => $todos,
]);