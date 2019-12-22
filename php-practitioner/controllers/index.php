<?php
$tasks = $app['database']->fetchAllTasks('todos', 'Task');

include 'views/index.view.php';
