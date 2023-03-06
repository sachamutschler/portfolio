<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <div class="navbar_dossier">
            <div class="title-bar">
                <div class="title-bar-text">MineSweeper</div>
                    <div class="title-bar-controls">
                    <button aria-label="Maximize" onclick="maximize()"></button>
                    <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
                </div>
            </div>
        </div>
        <iframe src="https://xn--dmineur-bya.eu/" frameborder="100"></iframe>
    </div> 
    <?php require ('Templates/bottom-bar.php'); ?>
    <script src="../resources/js/main.js"></script>
</body>
</html>