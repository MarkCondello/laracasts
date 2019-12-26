<?php
require 'core/functions.php';
require 'core/bootstrap.php';


use App\Core\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());