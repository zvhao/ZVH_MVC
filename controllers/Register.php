<?php

namespace app\controllers;

use app\core\Controller;
use app\models\UserModel;

class Register extends Controller
{
    public function index()
    {
        $user = new UserModel();

        if ($this->isPost()) {
            $user->loadData($this->getBody());
            $user->validate();
        }

        $this->view("layoutMaster", [
            'page' => 'register',
            'title' => 'Đăng ký',
            'css' => ['base', 'main'],
            'js' => ['main'],
            'model' => $user
        ]);
    }
}
