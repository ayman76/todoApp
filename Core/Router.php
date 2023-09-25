<?php

namespace Core;

//This class is responsible on control the routes and where it should go
class Router
{
    protected $routes = [];

    //Add the route to routes array
    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;

    }

    //function to add route with GET method to routes
    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    //function to add route with POST method to routes
    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    //function to add route with DELETE method to routes
    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    //function to add route with PATCH method to routes
    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    //function to add route with PUT method to routes
    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    //function to check the route to get the right controller for it
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path("HTTP/Controllers/" . $route['controller']);
            }
        }

        $this->abort();

    }

    public function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/$code.php");
        die();
    }

}