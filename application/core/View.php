<?php

namespace application\core;

use JetBrains\PhpStorm\NoReturn;

class View
{
    public string $path;
    public array $route;
    public string $layout = 'default';

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        echo $this->path;

    }

    public function render(string $title, array $vars = []): void
    {

        ob_start();
        $path = 'application/views/' . $this->path . '.php';
        if (file_exists($path)) {
            require $path;

            $content = ob_get_contents();

            require 'application/views/Layouts/' . $this->layout . '.php';
        } else {
            echo 'Вид не найден ' . $this->path;
        }

    }

    public function redirect(string $url): void
    {
        header('location: ' . $url);
        exit;
    }


    #[NoReturn] public static function errorCode(int $code): void
    {
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';
        if (file_exists($path)) {
            require $path;
        }
        exit;

    }


}