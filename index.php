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
        <h1>Главные новости дня</h1>
        <section class="top-news">
            <article class="top-news__item">
                <h2 class="top-news__title">Новость 1</h2>
                <p class="top-news__subtitle">Описание 1</p>
            </article>
            <article class="top-news__item">
                <h2 class="top-news__title">Новость 2</h2>
                <p class="top-news__subtitle">Описание 2</p>
            </article>
            <article class="top-news__item">
                <h2 class="top-news__title">Новость 3</h2>
                <p class="top-news__subtitle">Описание 3</p>
            </article>
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