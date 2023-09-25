<?php

use Core\App;
use Core\Database;

$id = $_POST['id'];
$db = App::resolve(Database::class);

$todo = $db->query('select * from todos where id = :id', [
    'id' => $id,
])->findOrFail();

$db->query("delete from todos where id = :id", [
    'id' => $id,
]);

redirect("/list?id={$_SESSION['list']}");