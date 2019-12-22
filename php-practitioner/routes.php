<?php
//$router is defined in the static method load from the Routes class.
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/culture.php',
    'contact-us' => 'controllers/contact.php',
]);