<?php

namespace app\core;

class Application
{
    private $controller = "home";
    private $action = "index";
    private array $params = [];

    public function __construct()
    {
        // $_GET['url'];
        $array_path = self::processUrl();

        // echo "<pre>";
        // print_r($_GET['url']);
        // echo "<pre>";
        // exit;

        if (file_exists(CONTROLLER_PATH . $array_path[0] . ".php"))
            $this->controller = $array_path[0];
        else exit("NOT FOUND CONTROLLER!");

        $class = "\\app\\controllers\\$this->controller";

        $this->controller = new $class;

        if(isset($array_path[1]) && method_exists($this->controller, $array_path[1]))
            $this->action = $array_path[1];

        unset($array_path[0], $array_path[1]);

        $this->params = $array_path ?? [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public static function processUrl()
    {
        if (isset($_GET['url']))
            // echo filter_var(trim($_GET['url'], "/"));
            return explode("/", filter_var(trim($_GET['url'], "/")));
        return ["0" => 'home'];
    }
}
