<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Мой сайт') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/products">Список продуктов</a></li>
            <li><a href="/products/create">Добавить продукт</a></li>
            <li><a href="/test-db">Тест базы данных</a></li>
        </ul>
    </nav>
</header>
<hr>
