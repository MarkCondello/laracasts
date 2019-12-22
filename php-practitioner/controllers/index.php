<?php
$tasks = $query->fetchAllTasks('todos', 'Task');

include  'views/index.view.php';
