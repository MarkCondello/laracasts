# Laracast Routing Project

## Application info
This codebase focuses on developing an understanding of MVC frameworks by building a routing system which receives requests, passes them to a controller and provides a view to a uri.

The application loads through index.php and will require setting up a vhost in order for the uri mapping to work.

The main application logic is contained within core/bootstrap.php which is required in the index.php file.

A static method from a Router class named load() receives a routes.php file. This routes.php file contains an associative array with uri to controller key value pairs. The load method returns a static instance of the Routes class so the application can access other methods available from it eg the define() and direct() methods.

In routes.php with an array of routes calls the $router static class reference and uses iether the post() or get() methods to set the routes for the application. These values are stored in the Router class array property named $routes. 

The post() and get() method takes a uri and a requestType (defined in Request class) which checks for matching uri's in the $routes array using array_key_exists() function that references the associated array created in routes.php. If a match is found, the direct method returns the associated controller for that uri.

## Other details

A config.php file is used to set up the database connection.
This file is in turn included in the bootstrap.php file as a key value within the $app array.
A Query Builder class is referenced within the $app array within the 'database' key.
These $app array key value pairs are globally available from bootstrap.php.
