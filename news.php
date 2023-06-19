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
<?php $currentPage = 'main' ?>
<div class="page">
    <header class="header">
        <a href="#">
            <img class="header__logo" src="./images/logo.png" alt="Логотип">
        </a>
        <nav>
            <ul class="header__links">
                <li><a href="#" class="header__link">Новости</a></li>
                <li><a href="#" class="header__link">Контакты</a></li>
            </ul>
        </nav>
        <a href="#" class="header__link mobile-modal__open-button">Меню</a>
    </header>
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
                        <a href="#" class="top-news__title"><?= $news['title']; ?></a>
                        <p class="top-news__subtitle"><?= $news['announce']; ?></p>
                    </div>
                </article>
            <?php } ?>
        </section>
        <ul class="main-links">
            <li><a href="#">Все новости</a></li>
            <li><a href="#">Обратная связь</a></li>
        </ul>
    </main>
    <footer class="footer">
        <p class="footer__title">© 2023 "Агенство Новостей"</p>
    </footer>
    <div class="mobile-modal">
        <div class="mobile-modal__container">
            <div class="mobile-modal__container-top">
                <button class="mobile-modal__close-button" type="button" id="mobile-modal__close-button"></button>
            </div>
            <div class="mobile-modal__container-center">
                <a href="./index.php">Главная</a>
                <a href="#">Новости</a>
                <a href="./contacts.php">Контакты</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>