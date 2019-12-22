<?php
require 'core/functions.php';
require 'core/Task.php';
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

