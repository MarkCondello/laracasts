<?php
class Router
{
    protected $routes = [];

    public static function load($file)
    {

        $router = new static; //creates a new Router class instance
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //check for route key against the registered routes set by the define() method
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri];
        }

        throw new Exception("No route found for this uri.");
    }
}