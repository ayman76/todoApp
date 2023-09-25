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


$router->get('/todo', 'todo/show.php');
$router->get('/todos/create', 'todo/create.php');
$router->post('/todos', 'todo/store.php');
$router->get('/todo/edit', 'todo/edit.php');
$router->patch('/todo', 'todo/update.php');
$router->delete('/todo', 'todo/destroy.php');


