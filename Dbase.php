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

    public static function getMainNews($limitNews)
    {
        $dbc = new PDO('mysql:host=localhost;dbname=php-news;charset=utf8', 'root', '');
        $stSql = "SELECT id,title,announce,DATE_FORMAT(`date`,\"%d.%m.%Y\") `fdate` FROM news ORDER BY `date` DESC LIMIT :nLimit";
        $res = $dbc->prepare($stSql);
        $res->bindValue(':nLimit', $limitNews, PDO::PARAM_INT);
        $res->execute();
        $rowsNews = $res->fetchAll();
        return $rowsNews;
    }
}