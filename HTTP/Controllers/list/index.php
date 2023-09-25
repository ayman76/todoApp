<?php

use Core\App;
use Core\Database;

$heading = 'Home';

$db = App::resolve('Core\Database');

$lists = $db->query("select * from lists")->get();

//dd($lists);

view('lists/index.view.php', [
    'heading' => $heading,
    'lists' => $lists,
]);