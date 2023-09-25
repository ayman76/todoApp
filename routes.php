<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/lists', 'list/index.php');
$router->get('/list', 'list/show.php');


