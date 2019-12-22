<?php

$name = $_POST['name'];

$app['database']->addRecord('author', 'name', $name);
//todo: Store the name receive from form to database (create a new DB method)
//todo: FInd out how to add multiple form values to a query
 require 'views/add-name.view.php';