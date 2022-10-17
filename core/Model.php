<?php

namespace app\core;

use app\core\db\Database;

abstract class Model extends Database
{
  public const RULE_REQUIRED = 'required';
  public const RULE_EMAIL = 'email';
  public const RULE_MIN = 'min';
  public const RULE_MAX = 'max';
  public const RULE_MATCH = 'match';
  public const RULE_UNIQUE = 'unique';

  public array $errors = [];

  public function loadData($data)
  {
    foreach ($data as $key => $value) {
      if (property_exists($this, $key)) {
        $this->{$key} = $value;
      }
    }
  }

  abstract public function rules(): array;

  abstract public function labels(): array;

  public function getLabel($attribute)
  {
    return $this->labels()[$attribute] ?? $attribute;
  }

  public function validate()
  {
    // [
    //   'fullName' => [self::RULE_REQUIRED],
    //   'username' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
    //   'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 32]],
    // ]
    foreach ($this->rules() as $attribute => $rules) {
      $value = $this->{$attribute};

      // [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 4]],
      foreach ($rules as $rule) {
        $ruleName = $rule;

        if (!is_string($ruleName)) {
          $ruleName = $rule[0];
          // self::RULE_REQUIRED
        }

        if ($ruleName === self::RULE_REQUIRED && !$value) {
          $this->addErrorForRule($attribute, self::RULE_REQUIRED);
        }

        if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
          $this->addErrorForRule($attribute, self::RULE_EMAIL);
        }

        if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
          $this->addErrorForRule($attribute, self::RULE_MIN, $rule);
        }

        if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
          $this->addErrorForRule($attribute, self::RULE_MAX, $rule);
        }

        if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
          $rule['match'] = $this->getLabel($rule['match']);
          $this->addErrorForRule($attribute, self::RULE_MATCH, $rule);
        }
      }
    }

    return empty($this->errors);
  }

  private function addErrorForRule(string $attribute, string $rule, $params = [])
  {
    $message = $this->errorMessage()[$rule] ?? '';

    foreach ($params as $key => $value) {
      $message = str_replace("{{$key}}", $value, $message);
    }
    $this->errors[$attribute][] = $message;
  }

  public function addError(string $attribute, string $message)
  {
    $this->errors[$attribute][] = $message;
  }

  public function errorMessage()
  {
    return [
      self::RULE_REQUIRED => 'This field is required.',
      self::RULE_EMAIL => 'This field must be valid email address.',
      self::RULE_MIN => 'Min length of this field must be {min}.',
      self::RULE_MAX => 'Max length of this field must be {max}.',
      self::RULE_MATCH => 'The field must be the same as {match}.',
      self::RULE_UNIQUE => 'Record with this {field} already exists.',
    ];
  }

  public function hasError($attribute)
  {
    return $this->errors[$attribute] ?? false;
  }

  public function getFirstError($attribute)
  {
    return $this->errors[$attribute][0] ?? false;
  }
}