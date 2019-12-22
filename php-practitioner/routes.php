<?php
//$router is defined in the static method load() from the Routes class.
//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'about/culture' => 'controllers/culture.php',
//    'contact-us' => 'controllers/contact.php',
//]);

$router->get('' , 'controllers/index.php');
$router->get('about' , 'controllers/about.php');
$router->get('about/culture' , 'controllers/culture.php');
$router->get('contact-us' , 'controllers/contact.php');

$router->post('names', 'controllers/add-name.php');