<?php

namespace app\controllers;

use app\core\Controller;

class Detail_product extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'detail_product',
            'title' => 'Chi tiết sản phẩm',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
