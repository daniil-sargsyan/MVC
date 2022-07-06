<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    public array $route;
    public View $view;
    public object|bool $model;

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel(string $name): bool|object
    {
        $path = 'application\models\\' . $name;
        if (class_exists($path)) {
            return new $path;
        }
        return false;
    }
}