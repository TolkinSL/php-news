<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="./pages/index.css">
    <script src="./components/validate.js" defer></script>
    <script src="./components/modal-mobile.js" defer></script>
</head>
<body class="body">
<?php $currentPage = 'contacts' ?>
<div class="page">
    <?php
    require_once(__DIR__ . '/header.php');
    ?>
    <main class="main-contacts">
        <?php
        require_once(__DIR__ . '/Dbase.php');
        $feedback = Dbase::getFeedback();
        $feedObj = [];
        $feedObj['name'] = $_POST['name'] ?? '';
        $feedObj['adress'] = $_POST['adress'] ?? '';
        $feedObj['phone'] = $_POST['phone'] ?? '';
        $feedObj['email'] = $_POST['email'] ?? '';
        if ($feedObj['name'] !== '' && $feedObj['adress'] !== '' && $feedObj['phone'] !== '' && $feedObj['email'] !== '') {
            Dbase::sendFeedback($feedObj);
            header('Location: ./contacts.php');
            die();
        } ?>

        <section class="main-contacts__form">
            <h1 class="main-contacts__title">Обратная связь</h1>
            <form method="post" class="form-main" novalidate>
                <input class="form-main__input form-main__name" id="form-main__name" type="text" name="name"
                       placeholder="Фамилия Имя Отчество" required="required">
                <span class="form-main__name-error">Введите ФИО, русские буквы</span>
                <input class="form-main__input form-main__adress" id="form-main__adress" type="text" name="adress"
                       placeholder="Адрес" required="required">
                <span class="form-main__adress-error">Введите адрес, русские буквы и цифры</span>
                <input class="form-main__input form-main__phone" id="form-main__phone" type="text" name="phone"
                       placeholder="Контактный телефон" required="required">
                <span class="form-main__phone-error">Введите телефон, + или цифры</span>
                <input class="form-main__input form-main__email" id="form-main__email" type="email" name="email"
                       placeholder="E-mail"
                       required="required">
                <span class="form-main__email-error">Введите почту example@example.com</span>
                <button class="form-main__button">Отправить заявку</button>
            </form>
        </section>
        <section class="main-contacts__db">
            <h2 class="main-contacts__db-title">Список заявок</h2>
            <table class="table-main">
                <thead>
                <tr>
                    <th>ФИО</th>
                    <th>E-mail</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($feedback as $rowFeed) { ?>
                    <tr>
                        <td><?= $rowFeed['name']; ?></td>
                        <td><?= $rowFeed['email']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
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