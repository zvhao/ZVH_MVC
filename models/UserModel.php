<?php

namespace app\models;

use app\core\db\DbModel;

class UserModel extends DbModel
{
  public string $fullName = '';
  public string $email = '';
  public string $tel = '';
  public string $password = '';
  public string $password2 = '';

  public function tableName(): string
  {
    return 'users';
  }

  public function labels(): array
  {
    return [
      'fullName' => 'Họ và tên',
      // 'username' => 'Tài khoản',
      'email' => 'Email',
      'tel' => 'Số điện thoại',
      'password' => 'Mật khẩu',
      'password2' => 'Nhập lại mật khẩu'
    ];
  }

  public function save()
  {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    return parent::save();
  }

  public function rules(): array
  {
    return [
      'fullName' => [self::RULE_REQUIRED],
      // 'username' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
      'tel' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 10]],
      'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
      'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 32]],
      'password2' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
    ];
  }

  public function attributes(): array
  {
    return ['fullName', 'password', 'tel'];
  }

  public function primaryKey(): string
  {
    return 'id';
  }

  public function getDisplayName(): string
  {
    return $this->fullName;
  }
}