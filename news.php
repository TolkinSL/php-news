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
<?php $currentPage = 'news' ?>
<div class="page">
    <?php
    require_once(__DIR__ . '/header.php');
    ?>
    <main class="main">
        <?php
        require_once(__DIR__ . '/Dbase.php');
        $limitNews = 5;
        $rowsNews = Dbase::getMainNews($limitNews);
        ?>
        <h1 class="main__title">Лента новостей</h1>
        <section class="lenta-news">
            <?php foreach ($rowsNews as $news) { ?>
                <article class="top-news__item lenta-news_modificator">
                    <p class="top-news__date"><?= $news['fdate']; ?></p>
                    <div class="top-news__item-container">
                        <a href="./current-news.php?id=<?= $news['id'] ?>" class="top-news__title"><?= $news['title']; ?></a>
                        <p class="top-news__subtitle"><?= $news['announce']; ?></p>
                    </div>
                </article>
            <?php } ?>
        </section>
        <ul class="main__links">
            <li><a href="./index.php">Главная</a></li>
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