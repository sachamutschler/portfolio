<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
    <div class="loader-wrapp">
        <div class="loader-container">
            <div class="logo">
                <p class="logo-top">Microsoft</p>
                <p class="logo-middle">Windows<span>XP</span></p>
                <p class="logo-bottom">Professional</p>
            </div>
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
        <div id="dossier_link">
            <a href="dossier.php"><img src="resources/img/dossier.png" alt="image" class="dossier" onclick="window.location.href='dossier.php'"><!-- image par freepik --></a>
            <a href="dossier.php"><h1 id="titre" class="titre" onclick="window.location.href='dossier.php' ">Portfolio <br>Sacha Mutschler</h1></a>
        </div>
    
    <div id="navbar">
        <?php 
            require('menu.php');
        ?>
        <!-- <button class="button-start-menu logo-vert" id="logo-vert">
        
            <img src="resources/img/xp-logo.PNG" alt="" class="logo_windows">
            <p class="start">Démarrer</p>
           démarrer
        </button> -->
        <button class="logo-vert button-start-menu">
                <img src="resources/img/Windows_logo.png" alt="" class="logo-windows">
                start
            </button>
        <div class="blur-right-bar">
                <ul class="blur-right-bar-applications">
                    <li><img src="resources/img/msn.png" alt="internet explorer icon"></li>
                    <li><img src="resources/img/my_computer.png" alt="internet explorer icon"></li>
                    <li><img src="resources/img/my_network_places.png" alt="internet explorer icon"></li>
                </ul>
                <span class="time">
                    14:34
                </span>
            </div>
    </div>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/navbar.js"> </script>
</body>
</html>