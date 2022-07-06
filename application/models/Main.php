<?php


namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getNews(): bool|array
    {
        return $this->db->row('SELECT title FROM news');
    }
}