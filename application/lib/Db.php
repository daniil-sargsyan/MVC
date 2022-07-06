<?php

namespace application\lib;

use PDO;

class Db
{
    protected PDO $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
    }

    public function query(string $sql,): bool|\PDOStatement
    {
        return $this->db->query($sql);
    }

    public function row(string $sql): bool|array
    {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function column(string $sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();

    }


}