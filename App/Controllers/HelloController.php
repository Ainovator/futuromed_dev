<?php

namespace App\Controllers;

use App\Core\View;

class HelloController
{
    public function sayHello()
    {
        $data = [
            'message' => 'Hello World',
            'author' => 'MVC Framework'
        ];

        // Используем класс View для рендеринга
        View::render('Hello', $data);
    }
}
