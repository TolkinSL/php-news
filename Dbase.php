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

    public static function getNewsById($newsId)
    {
        $dbc = new PDO('mysql:host=localhost;dbname=php-news;charset=utf8', 'root', '');
        $stSql = "SELECT id,title,announce,content,image,DATE_FORMAT(`date`,\"%d.%m.%Y\") `fdate` FROM news WHERE id = :nId";
        $res = $dbc->prepare($stSql);
        $res->bindValue(':nId', $newsId, PDO::PARAM_INT);
        $res->execute();
        $rowNews = $res->fetch();
        return $rowNews;
    }

    public static function sendFeedback($feedObj)
    {
        $dbc = new PDO('mysql:host=localhost;dbname=php-news;charset=utf8', 'root', '');
        $stSql = "INSERT INTO feedback (id, name, adress, phone, email) VALUES (0, :name, :adress, :phone, :email)";
        $res = $dbc->prepare($stSql);
        $res->bindValue(':name', $feedObj['name'], PDO::PARAM_STR);
        $res->bindValue(':adress', $feedObj['adress'], PDO::PARAM_STR);
        $res->bindValue(':phone', $feedObj['phone'], PDO::PARAM_STR);
        $res->bindValue(':email', $feedObj['email'], PDO::PARAM_STR);
        $res->execute();
    }
}