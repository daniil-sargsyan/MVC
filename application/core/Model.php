<?php

namespace application\core;

use application\lib\Db;

abstract class Model
{

    public Db $db;

    public function __construct()
    {
        $this->db = new Db();
    }
}