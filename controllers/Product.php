<?php

namespace app\controllers;

use app\core\Controller;

class Product extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'product',
            'title' => 'Sản phẩm',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
