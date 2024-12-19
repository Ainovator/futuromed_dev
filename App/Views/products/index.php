<?php
$title = 'Список продуктов';
require dirname(__DIR__) . '/layouts/header.php';
?>

<h1><?= htmlspecialchars($title) ?></h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?= htmlspecialchars($product['id']) ?> -
            <?= htmlspecialchars($product['name']) ?>:
            <?= htmlspecialchars($product['price']) ?> $
        </li>
    <?php endforeach; ?>
</ul>

<?php

?>
