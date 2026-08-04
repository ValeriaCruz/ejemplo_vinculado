<?php

class Router
{
    private array $routes = [];


    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }


    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $uri = parse_url(
            $_SERVER['REQUEST_URI'],
            PHP_URL_PATH
        );


        if(isset($this->routes[$method][$uri]))
        {
            call_user_func(
                $this->routes[$method][$uri]
            );

            return;
        }


        http_response_code(404);

        echo "404 - Página no encontrada";
    }
}