<?php
namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file)
    {
        $router = new static; //creates a new Router class instance
        require $file;
        //print_r($router->routes);
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
         //check for route key against the registered routes set by the get() and post() methods
        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            //gather the requested controller from the routes eg. PagesController@home
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception("No route found for this uri.");
    }

    protected function callAction($controller, $action)
    {
        $controller =  "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(method_exists($controller, $action)){
            return $controller->$action();
        }
        throw new Exception("There is no method {$action} for the controller called {$controller}.");
    }
}