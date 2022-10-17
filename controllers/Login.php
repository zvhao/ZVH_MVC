<?php

namespace app\controllers;

use app\core\Controller;
use app\models\UserModel;

class Login extends Controller
{

    public function index()
    {
        $user = new UserModel();

        if ($this->isPost()) {
            $user->loadData($this->getBody());
            $user->validate();
        }

        $this->view("layoutMaster", [
            'page' => 'login',
            'title' => 'Tài khoản',
            'css' => ['base', 'main'],
            'js' => ['main'],
            'model' => $user
        ]);
    }
}
