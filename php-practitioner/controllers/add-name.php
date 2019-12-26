<?php
$name = $_POST['name'];
$todo_id = $_POST['todo'];

$args = [
    'name' => $name,
    'todo_id' => $todo_id
];

App::get('database')->insert('author', $args);

//$app['database']->query("INSERT INTO author (name, todo_id) VALUES (:name, :todo_id)");
//$app['database']->bind(":name", $name, PDO::PARAM_STR);
//$app['database']->bind(":todo_id", $todo_id, PDO::PARAM_INT);
//$app['database']->execute();
//
//$app['database']->query("SELECT description from todos WHERE id = :todo_id");
//$app['database']->bind(':todo_id', $todo_id, PDO::PARAM_INT);
//$todo_item = $app['database']->single();

//$app['database']->addRecord('author', 'name' ,$name);

header('Location: /');