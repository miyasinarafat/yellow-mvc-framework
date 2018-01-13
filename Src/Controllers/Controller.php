<?php

namespace App\Controllers;


class Controller
{
    public $vars = [];
    public $layouts = 'app';

    /**
     * @param $data
     */
    public function set($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    /**
     * @param $path
     * @param $filename
     */
    public function render($path, $filename)
    {
        extract($this->vars);
        ob_start();
        if (isset($path) && !empty($path)) {
            require(ROOT . "Views/" . $path . "/" . $filename . '.php');
        } else {
            require(ROOT . "Views/" . $filename . '.php');
        }
        $content_for_layout = ob_get_clean();

        if ($this->layouts == false){
            $content_for_layout;
        } else {
            require (ROOT . "Views/layouts/". $this->layouts . '.php');
        }
    }
}