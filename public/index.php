<?php

require_once __DIR__ . '/../ejemplogitcpanel/app/Core/Router.php';
require_once __DIR__ . '/../ejemplogitcpanel/app/Core/Controller.php';

require_once __DIR__ . '/../ejemplogitcpanel/app/Controllers/HomeController.php';


$router = new Router();


$router->get('/', function(){

    $controller = new HomeController();

    $controller->index();

});


$router->dispatch();