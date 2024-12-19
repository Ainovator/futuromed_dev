<?php

namespace App\Controllers;

use App\Core\Database;

class TestController
{
    public function testDatabaseConnection()
    {
        try {
            $pdo = Database::connect();
            echo "Подключение к базе данных успешно!";
        } catch (\Exception $e) {
            echo "Ошибка подключения к базе данных: " . $e->getMessage();
        }
    }
}
