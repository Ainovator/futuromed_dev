<?php
$title = 'Список продуктов';
require dirname(__DIR__) . '/layouts/header.php';
?>


<h1><?= htmlspecialchars($product['name']) ?></h1>
<p>Цена: <?= htmlspecialchars($product['price']) ?> $</p>
<p>Дата добавления: <?= htmlspecialchars($product['created_at']) ?></p>
<a href="/products">Назад к списку продуктов</a>

