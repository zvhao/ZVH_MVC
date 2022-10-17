<?php

namespace app\controllers;

use app\core\Controller;

class Introduce extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'introduce',
            'title' => 'Giới thiệu',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
