<?php

namespace app\controllers;

use app\core\Controller;

class Home extends Controller
{

    public function index()
    {
        $model = $this -> model("HomeModel");
        $this->view("layoutMaster", [
            'page' => 'home',
            'title' => 'Trang chủ',
            'css' => ['base', 'main'],
            'js' => ['main'],
            'data' => $model::all(),

        ]);
    }
}
