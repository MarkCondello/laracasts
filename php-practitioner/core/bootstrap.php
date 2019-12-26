<?php
//composer class autoload dependency
require 'vendor/autoload.php';
//store application settings in a the register array inside App class
App::bind('config', require 'config.php');
App::bind('siteRoot',  'http://' . Request::rootUrl() . '/');
App::bind('appRoot', 'http://' . Request::rootUrl() . '/php-practitioner/');

//$app = [];
//$app['config'] = require 'config.php';
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';
//require 'core/Request.php';
//require 'core/Router.php';

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
    )
);

//$app['siteRoot'] = 'http://' . Request::rootUrl() . '/';
//$app['appRoot'] = 'http://' . Request::rootUrl() . '/php-practitioner/';
//$test = App::get("test");