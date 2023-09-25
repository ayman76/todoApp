<?php

// responsible to run some code in the start of app

use Core\App;
use Core\Container;
use Core\Database;

//create new container to add what instances we want
$container = new Container();
//add database instance in container
$container->bind('Core\Database', function () {
    $config = require base_path('config.php');
    return new Database($config['database']);
});

// add container in app class to access it easily in any file
App::setContainer($container);
