<?php

require 'application/lib/Dev.php';

use application\core\Router;

require 'application/lib/Autoload.php';

session_start();

$obj = new Router();
$obj->run();






