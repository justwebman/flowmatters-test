<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Flowmatters - Crafting digital experiences</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <?php $minify = defined( 'DEBUG_MODE' ) && DEBUG_MODE ? '' : '.min'; ?>
    <link rel="stylesheet" href="assets/css/main<?php echo $minify ?>.css" type="text/css" media="all">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://kit.fontawesome.com/451a3b6fd6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/main<?php echo $minify ?>.js"></script>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <img src="assets/images/facebook-logo.png" alt="facebook logo" />
            </div>
            <div class="header-search">
                <input class="header-search__bar" type="text" value="Flowmatters" />
                <button class="header-search__button" type="submit"></button>
            </div>
            <div class="header-right">
                <ul class="header-links">
                    <li class="header-links__item">
                        <a class="header-links__button" href="#">Home <span class="header-links__count">5</span></a>
                    </li>
                </ul>
                <ul class="header-icons">
                    <li class="header-icons__item"><span class="header-icons__icon header-icons__icon--friends"></span></li>
                    <li class="header-icons__item"><span class="header-icons__icon header-icons__icon--messages"></span></li>
                    <li class="header-icons__item header-icons__item--divider"><span class="header-icons__icon header-icons__icon--notifications"></span></li>
                    <li class="header-icons__item"><span class="header-icons__icon header-icons__icon--help"></span></li>
                    <li class="header-icons__item"><span class="header-icons__icon header-icons__icon--caret"></span></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">