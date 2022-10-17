<?php

namespace app\controllers;

use app\core\Controller;

class Cart extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'cart',
            'title' => 'Giỏ hàng',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
