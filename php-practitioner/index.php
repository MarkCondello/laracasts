<?php
require 'app/core/functions.php';
require 'app/core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());