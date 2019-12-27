<?php
$tasks = App::get('database')->selectAll('todos');

//$authors = $app['database']->selectAll('author');

 $db = Connection::make(App::get('config')['database']);

$query =  $db->prepare("SELECT  name, description
 FROM author a 
 INNER JOIN todos t 
 ON a.todo_id = t.id
 ");

$query->execute();
$authors= $query->fetchAll(PDO::FETCH_OBJ);

include 'views/index.view.php';
