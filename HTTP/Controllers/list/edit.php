<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$list = $db->query("select * from lists where id = :id", [
    'id' => $_GET['id'],
])->findOrFail();

//dd($list);
view('lists/edit.view.php', [
    'heading' => "Edit list: " . $list['title'],
    'errors' => [],
    'list' => $list
]);
