<header class="header">
    <a href="./index.php">
        <img class="header__logo" src="./images/logo.png" alt="Логотип">
    </a>
    <nav>
        <ul class="header__links">
            <li><a href="./news.php" class="header__link <?= 'news' === $currentPage ? 'header__link-active' : '' ?>">Новости</a></li>
            <li><a href="./contacts.php" class="header__link <?= 'contacts' === $currentPage ? 'header__link-active' : '' ?>">Контакты</a></li>
        </ul>
    </nav>
    <a href="#" class="header__link mobile-modal__open-button">Меню</a>
</header>