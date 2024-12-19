<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить проект</title>
</head>
<body>
    <h1>Добавить новый продукт</h1>
    <form action="/products/store" method="post">
        <label for "name">Название: </label>
        <input type = "text" id="name" name="name" required>
        <br>
        <label for "price">Цена</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>