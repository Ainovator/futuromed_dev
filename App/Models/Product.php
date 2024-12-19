<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Product
{
    public static function getAll(): array
    {
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public static function create(array $data): void
    {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
        $stmt->execute([
            'name' => $data['name'],
            'price' => $data['price'],
        ]);
    }

    public static function find(int $id): ?array
    {
        $pdo = Database::connect();

        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");

        $stmt->execute(['id' => $id]);

        $product = $stmt->fetch();

        return $product ?: null;

    }
}
