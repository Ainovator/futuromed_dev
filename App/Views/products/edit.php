<?php
$title = 'Изменение товара';
require dirname(__DIR__) . '/layouts/header.php';
?>

<form action="/products/update" method="post">
    <label for "name">Название: </label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>

    <br>
    <label for "price">Цена</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <br>
    <button type="submit">Добавить</button>
</form>

