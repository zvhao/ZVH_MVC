<?php

namespace app\models;

use app\core\db\Database;

class AuthModel extends Database
{
    public function validate($data = [])
    {
        $errors = [];

        if (empty($data['fullname'])) {
            $errors['fullname'] = 'Khong duoc bo trong';
        }

        if (empty($data['email'])) {
            $errors['email'] = 'Khong duoc bo trong';
        }

        if (empty($data['tel'])) {
            $errors['tel'] = 'Khong duoc bo trong';
        }

        if (empty($data['password'])) {
            $errors['password'] = 'Khong duoc bo trong';
        }

        if (empty($data['password2'])) {
            $errors['password2'] = 'Khong duoc bo trong';
        }

        return ['errors' => $errors];
    }
}
