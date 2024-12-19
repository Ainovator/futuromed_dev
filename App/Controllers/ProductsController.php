<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController
{
    public function index()
    {
        $products = Product::getAll();

        $data = [
            'products' => $products,
            'title' => 'Список продуктов',
        ];

        extract($data, EXTR_SKIP);
        require dirname(__DIR__) . '/Views/products/index.php';
    }

    public function create()
    {
        $data = [
            'title' => 'Добавить новый продукт',
        ];

        extract($data, EXTR_SKIP);
        require dirname(__DIR__) . '/Views/products/create.php';
    }

    public function store()
    {
        $name = htmlspecialchars($_POST['name']);
        $price = floatval($_POST['price']);

        Product::create([
            'name' => $name,
            'price' => $price,
        ]);

        header('Location: /products');
        exit;
    }

    private function getProductData(int $id): ?array
    {
        if (!$id || !is_numeric($id)) {
            http_response_code(404);
            echo "Товар не найден! Неверный идентификатор.";
            return null;
        }

        $product = Product::find($id);

        if (!$product) {
            http_response_code(404);
            echo "Товар не найден!";
            return null;
        }

        return $product;
    }

    public function show()
    {
        $id = $_GET['id'] ?? null;

        $product = $this->getProductData((int)$id);
        if (!$product) {
            return; // Если товар не найден, завершаем выполнение
        }

        $data = [
            'product' => $product,
            'title' => 'Детали товара',
        ];

        extract($data, EXTR_SKIP);
        require dirname(__DIR__) . '/Views/products/show.php';
    }


    public function edit()
    {
        $id = $_GET['id'] ?? null;

        $product = $this->getProductData((int)$id);
        if (!$product) {
            return; // Если товар не найден, завершаем выполнение
        }

        $data = [
            'product' => $product,
            'title' => 'Редактирование товара',
        ];

        extract($data, EXTR_SKIP);
        require dirname(__DIR__) . '/Views/products/edit.php';
    }

}
