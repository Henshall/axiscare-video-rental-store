<?php

namespace App;

class Router
{
    private $routes = [];

    public function addRoute($path, $controller, $method)
    {
        $this->routes[$path] = ['controller' => $controller, 'method' => $method];
    }

    public function dispatch($path)
    {
        if (isset($this->routes[$path])) {
            $controllerName = $this->routes[$path]['controller'];
            $methodName = $this->routes[$path]['method'];

            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            echo "Route not found for path: $path<br>";
            $this->renderNotFound();
        }
    }

    private function renderNotFound()
    {
        http_response_code(404);
        echo "404 - Not Found";
    }
}
