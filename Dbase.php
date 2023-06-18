<?php

class Dbase
{
    public static function getFeedback()
    {
        $dbc = new PDO('mysql:host=localhost;dbname=php-news;charset=utf8', 'root', '');
        $res = $dbc->query('SELECT * FROM feedback ORDER BY `id`');
        $feedback = $res->fetchAll();
        return $feedback;
    }
}