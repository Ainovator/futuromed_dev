<?php

return [

    '/hello' => ['App\Controllers\HelloController', 'sayHello'],

    '/products' => ['App\Controllers\ProductsController', 'index'],
    '/products/create' => ['App\Controllers\ProductsController', 'create'],
    '/products/store' => ['App\Controllers\ProductsController', 'store'],
    '/products/show' => [App\Controllers\ProductsController::class, 'show'],
    '/products/edit' => [App\Controllers\ProductsController::class, 'edit'],

    '/test-db' => ['App\Controllers\TestController', 'testDatabaseConnection'],

];
