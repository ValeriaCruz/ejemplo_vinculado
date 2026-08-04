<?php

class Router
{

    private $routes = [];


    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }


    public function dispatch()
    {

        $method = $_SERVER['REQUEST_METHOD'];

        $url = $_SERVER['REQUEST_URI'];

        // Eliminamos parámetros GET
        $url = explode('?', $url)[0];


        if(isset($this->routes[$method][$url]))
        {

            $controller = $this->routes[$method][$url];

            $controller();

        }
        else
        {

            http_response_code(404);

            echo "Página no encontrada";

        }

    }

}