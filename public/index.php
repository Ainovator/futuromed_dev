<?php

require_once '../vendor/autoload.php';

use App\Core\Router;

// Получаем текущий URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Создаём экземпляр маршрутизатора и передаём URI
$router = new Router();
$router->dispatch($uri);
