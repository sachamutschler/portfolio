<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <div class="navbar_dossier">
            <div class="title-bar">
                <div class="title-bar-text">Mon CV</div>
                    <div class="title-bar-controls">
                    <button aria-label="Maximize" onclick="maximize()"></button>
                    <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
                </div>
            </div>
        </div>
        <div class="pdf">
            <embed src="../resources/img/MUTSCHLERSACHACV.pdf" width=100% height=572 type='application/pdf'/>
        </div>
    </div> 
    <?php require ('Templates/bottom-bar.php'); ?>
    <script src="../resources/js/main.js"></script>
</body>
</html>