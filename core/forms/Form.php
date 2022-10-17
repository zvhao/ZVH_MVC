<?php

namespace app\core\forms;

use app\core\Model;

class Form
{
  public static function begin($action, $method, $id)
  {
    echo sprintf('<form action="%s" method="%s" id="%s">', $action, $method, $id);
    return new Form();
  }

  public static function end()
  {
    echo '</form>';
  }

  public function field(Model $model, $attribute, $icon)
  {
    return new InputField($model, $attribute, $icon);
  }
}