<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Web Application Connected Users</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/styles/styles.css">
    <link rel="icon" href="<?php echo BASE_URL; ?>/public/pictures.flavicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="navMenu" id="navMenu">
            <div class="logo"><a href="<?php echo BASE_URL;?>/accueil"><img src="<?php echo BASE_URL; ?>/public/pictures/logo.png" alt="Logo Arcadia"></a></div>
            <nav class="navList">
                <ul class="linkList">
                <li><a href="<?php echo BASE_URL;?>/accueil">accueil</a></li>
                    <li><a href="<?php echo BASE_URL;?>/habitats">habitats</a></li>
                    <li><a href="<?php echo BASE_URL;?>/services">services</a></li>
                    <li><a href="<?php echo BASE_URL;?>/contact">contact</a></li>
                    <li><a href="<?php echo BASE_URL;?>/connected">Votre Espace</a></li>
                </ul>
            </nav>
            <div class="hours"><img src="<?php echo BASE_URL; ?>/public/pictures/clock-regular.svg" alt="clock"> 9h-17h</div>
            <a href="<?php echo BASE_URL; ?>/logout" class="connexion" id="connexion"><img src="<?php echo BASE_URL; ?>/public/pictures/lock-open-solid.svg" alt="unlock" id="connexionImg"></a>
        </div>
        <button class="burgerMenu" id="burgerMenu"></button>
    </header>