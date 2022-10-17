<?php

namespace app\controllers;

use app\core\Controller;

class Guide extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'Guide',
            'title' => 'Hướng dẫn',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
