<?php

namespace app\core;

class Router
{
    private $routes = array();

    public function __construct(array $routes = []) {
        $this->routes = $routes;
    }

    public function route($pattern, $callback) {
        $this->routes[$pattern] = $callback;
    }

    public function execute($uri = null) {
        $uri = $uri ?: $_SERVER['PATH_INFO'];
        foreach ($this->routes as $pattern => $callback) {
            if (preg_match("/{$pattern}/", $uri, $params) === 1) {
                array_shift($params);
                list ($controller, $method) = explode('@', $callback);
                $controller = 'app\controller\\' . $controller;
                return call_user_func_array([new $controller, $method], array_values($params));
            }
        }
    }
}