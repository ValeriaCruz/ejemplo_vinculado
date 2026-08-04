<?php

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/Controller.php';

require_once __DIR__ . '/../app/Controllers/HomeController.php';

require_once __DIR__ . '/../routes/web.php';

$router->dispatch();