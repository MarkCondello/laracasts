<?php

require 'core/functions.php';
require 'core/Task.php';
$query = require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';
//require $router->direct($uri);

require Router::load('routes.php')
    ->direct(Request::uri());


var_dump($app);