<?php


$router = new Router();


$router->get('/', function(){

    $controller = new HomeController();

    $controller->index();

});