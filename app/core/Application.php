<?php

use app\core\Router;

class Application
{
    /**
     * Routing of URL
     */
    public function __construct()
    {
        $routes = include_once APP . 'routes.php';
        $router = new Router($routes);
        return $router->execute();
    }
}