<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$list = $db->query("select * from lists where id = :id", [
    'id' => $_POST['id'],
])->findOrFail();

$db->query("delete from lists where id = :id", [
    'id' => $_POST['id'],
]);

redirect("/lists");