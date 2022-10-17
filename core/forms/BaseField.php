<?php

namespace app\core\forms;

use app\core\Model;

abstract class BaseField
{
  public Model $model;
  public string $attribute;
  public string $icon = "";

  public function __construct(Model $model, string $attribute, string $icon)
  {
    $this->model = $model;
    $this->attribute = $attribute;
    $this->icon = $icon;
  }

  abstract public function renderInput(): string;

  public function __toString()
  {
    return sprintf(
      '
    <div class="input-field">
      %s
      <i class="fa-solid %s"></i>
      %s
    </div>
    <div class="invalid-feedback">
        %s
    </div>
    ',
      $this->renderInput(),
      $this->icon,
      $this->attribute === 'password' || $this->attribute === 'password2' ? $this->renderShowPassword() : "",
      $this->model->getFirstError($this->attribute)
    );
  }

  public function renderShowPassword() {
    return '<i class="fa-solid fa-eye-slash eye-icon showHidePw"></i>';
  }
}