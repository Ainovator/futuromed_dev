<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;

    public static function connect(): PDO
    {
        if (self::$pdo === null) {
            $config = require dirname(__DIR__, 2) . '/config/db.php';

            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

            try {
                self::$pdo = new PDO($dsn, $config['user'], $config['password'], [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die("Ошибка подключения к базе данных: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
