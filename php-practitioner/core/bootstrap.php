<?php
//store application settings in an array
$app = [];

$app['config'] = require 'config.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Request.php';
require 'core/Router.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

$app['siteRoot'] = 'http://' . Request::rootUrl() . '/';
$app['appRoot'] = 'http://' . Request::rootUrl() . '/php-practitioner/';