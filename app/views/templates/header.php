<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Web Application</title>
    <link rel="stylesheet" href="/public/styles/styles.css">
</head>
<body>
    <header>
        <div class="navMenu" id="navMenu">
            <div class="logo"><a href="index.php"><img src="pictures/logo.png" alt="Logo Arcadia"></a></div>
            <nav class="navList">
                <ul class="linkList">
                    <li><a href="index.php">accueil</a></li>
                    <li><a href="<?php echo BASE_URL;?>/habitats">habitats</a></li>
                    <li><a href="/public/services">services</a></li>
                    <li><a href="/public/contact">contact</a></li>
                </ul>
            </nav>
            <div class="hours"><img src="pictures/clock-regular.svg" alt="clock"> 9h-17h</div>
            <a href="/public/connexion" class="connexion" id="connexion"><img src="../../public/pictures/lock-solid.svg" alt="lock" id="connexionImg"></a>
        </div>
        <button class="burgerMenu" id="burgerMenu"></button>
    </header>