<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="./pages/index.css">
    <script src="./components/modal-mobile.js" defer></script>
</head>
<body class="body">
<?php $currentPage = 'current-news' ?>
<div class="page">
    <?php
    require_once(__DIR__ . '/header.php');
    ?>
    <main class="main-current">
        <?php
        require_once(__DIR__ . '/Dbase.php');
        $newsId = $_GET['id'] ?? 1;
        $rowNews = Dbase::getNewsById($newsId);
        //print_r($rowNews);
        ?>
        <p class="top-news__date"><?= $rowNews['fdate']; ?></p>
        <h1 class="top-news__title"><?= $rowNews['title']; ?></h1>
        <img class="top-news__image" src="./images-news/<?= $rowNews['image'] ?>" alt="<?= $rowNews['title'] ?>">
        <p class="top-news__subtitle"><?= $rowNews['content']; ?></p>
        <ul class="main__links">
            <li><a href="./news.php">Все новости</a></li>
            <li><a href="./contacts.php">Обратная связь</a></li>
        </ul>
    </main>
    <footer class="footer">
        <p class="footer__title">© 2023 "Агенство Новостей"</p>
    </footer>
    <?php
    require_once(__DIR__ . '/mobile-modal.php');
    ?>
</div>
</body>
</html>