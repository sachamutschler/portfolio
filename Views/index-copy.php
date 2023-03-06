<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div id="dossier_link">
        <a href="menu-dossier.php"><img src="../resources/img/dossier.png" alt="image" class="dossier" onclick="window.location.href='menu-dossier.php'"><!-- image par freepik --></a>
        <a href="menu-dossier.php"><h1 id="titre" class="titre" onclick="window.location.href='menu-dossier.php'">Portfolio <br>Sacha Mutschler</h1></a>
    </div>
    <?php
        require ('Templates/bottom-bar.php')
    ?>
    <script src="../resources/js/main.js"></script>
    <script src="../resources/js/navbar.js"> </script>
</body>
</html>