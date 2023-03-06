<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <?php require ('Templates/navbar.php') ?>
                <div class="liste-dossier">
                    <h5 class="titre-liste-dossier">Ma veille technologique :  </h5>
                    <div class="double-column">
                        <div class="text-veille">
                            <p>La veille technologique consiste à s’informer de façon systématique sur les techniques les plus récentes et surtout sur leur mise à disposition commerciale et ainsi rester informer sur les nouveautés.</p> 
                            <p>Je réalise ma veille sur l'évolution du développement de jeux vidéo en lisant des "thread" Twitter mais également la documentation des entreprises comme : Unity et Unreal Engine.</p>
                            <p>Je note ensuite les liens qui m'intéressent dans une page One Note dédiée.</p>
                            <p>J'ai résumé mes recherches dans le document pdf visionnable ci dessous :</p>
                            <a href="../resources/E4/veille_technologique.pdf" class="doc-veille">
                                <div class="ligne-fichier-dossier">
                                    <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                    <span class="first">Veille Technologique</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
    <?php require ('Templates/bottom-bar.php') ?>
    <script src="../resources/js/main.js"></script>
</body>
</html>