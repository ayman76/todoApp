<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/lists', 'list/index.php');
$router->get('/list', 'list/show.php');
$router->get('/lists/create', 'list/create.php');
$router->Post('/lists', 'list/store.php');
$router->get('/list/edit', 'list/edit.php');
$router->patch('/list', 'list/update.php');
$router->delete('/list', 'list/destroy.php');


