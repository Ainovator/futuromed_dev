<?php

namespace App\Core;

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = require '../config/routes.php';
    }

    public function dispatch($uri)
    {
        $uri = rtrim($uri, '/'); // Убираем лишний слеш
        if (isset($this->routes[$uri])) {
            [$controller, $method] = $this->routes[$uri];

            if (class_exists($controller) && method_exists($controller, $method)) {
                (new $controller())->$method();
            } else {
                $this->notFound("Класс или метод не найден.");
            }
        } else {
            $this->notFound("Маршрут не найден.");
        }
    }

    private function notFound($message)
    {
        http_response_code(404);
        echo "404 - Страница не найдена<br>";
        echo $message;
    }
}
