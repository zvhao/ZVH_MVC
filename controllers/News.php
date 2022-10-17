<?php

namespace app\controllers;

use app\core\Controller;

class News extends Controller
{

    public function index()
    {
        $this->view("layoutMaster", [
            'page' => 'news',
            'title' => 'Tin tức',
            'css' => ['base', 'main'],
            'js' => ['main'],
        ]);
    }
}
