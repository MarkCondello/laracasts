<?php
//$router is defined in the static method load() from the Routes class.
//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'about/culture' => 'controllers/culture.php',
//    'contact-us' => 'controllers/contact.php',
//]);

//$PagesController = new PagesController();
$router->get('' , 'PagesController@home');
$router->get('about' , 'PagesController@about');
$router->get('about/culture' , 'PagesController@culture');
$router->get('contact-us' , 'PagesController@contact');
$router->get('add-user', 'UsersController@index');
$router->post('store-user', 'UsersController@store');

//$router->post('names', 'PagesController@addName');

//$router->get('' , 'controllers/index.php');
//$router->get('about' , 'controllers/about.php');
//$router->get('about/culture' , 'controllers/culture.php');
//$router->get('contact-us' , 'controllers/contact.php');
//$router->post('names', 'controllers/add-name.php');