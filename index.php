<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Sacha Mutschler</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/xp.css">
    <link rel="stylesheet" href="resources/css/menu.css">
    <link rel="stylesheet" href="resources/css/contact.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
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
        <a href="Views/menu-dossier.php"><img src="resources/img/dossier.png" alt="image" class="dossier" onclick="window.location.href='menu-dossier.php'"><!-- image par freepik --></a>
        <a href="Views/menu-dossier.php"><h1 id="titre" class="titre" onclick="window.location.href='menu-dossier.php' ">Portfolio <br>Sacha Mutschler</h1></a>
    </div>
    <?php require ('Views/Templates/bottom-bar.php') ?>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/navbar.js"> </script>
    <script>
        const loader = document.querySelector(".loader-wrapp");
        function hideLoader() {
        loader.style.display = "none"
    }
    setTimeout(hideLoader, 3000);
    </script>
</body>
</html>