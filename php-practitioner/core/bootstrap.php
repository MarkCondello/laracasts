<?php

use App\Core\{App, Request};
use App\Core\Services\{QueryBuilder, Connection};

//composer class autoload dependency
require 'vendor/autoload.php';
//store application settings in a the register array inside App class
App::bind('config', require 'config.php');
App::bind('siteRoot',  'http://' . Request::rootUrl() . '/');
App::bind('appRoot', 'http://' . Request::rootUrl() . '/php-practitioner/');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
    )
);

//helper functions
function view($name, $data = [])
{
    extract($data); // creates name variable from an array eg $name = 'foo'.
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}