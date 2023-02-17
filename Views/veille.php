<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <div class="navbar_dossier">
            <div class="title-bar">
                <div class="title-bar-text">Portfolio Sacha Mutschler</div>
                    <div class="title-bar-controls">
                    <button aria-label="Maximize" onclick="maximize()"></button>
                    <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
                </div>
            </div>
        </div>
        
            <div class="div-navbar-dossier">
                <ul class="navbar-dossier">
                    <li><a href="#">Fichier</a></li>
                    <li><a href="#">Edition</a></li>
                    <li><a href="#">Affichage</a></li>
                    <li><a href="#">Favoris</a></li>
                    <li><a href="#">Outils</a></li>
                    <li><a href="#">?</a></li>
                </ul>
                <div class="div-logo-nav">
                    <img src="../resources/img/Windows_logo.png" alt="" srcset="" class="logo-nav-dossier">
                </div>
            </div>
            <div class="div2-navbar-dossier">
                <div class="div-retour" onclick="window.location.href='menu-dossier.php'">
                    <img src="../resources/img/redo.png" class="">
                    <p>Précédente</p>
                </div>
                <img src="../resources/img/search.png" class="retour">
                <img src="../resources/img/shared%20folder.png" class="retour">
            </div>
            
                
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
    
    <div id="navbar">
        <?php 
            require('menu.php');
        ?>
        <button class="logo-vert button-start-menu">
            <img src="../resources/img/Windows_logo.png" alt="" class="logo-windows">
                start
        </button>
        <div class="blur-right-bar">
                <ul class="blur-right-bar-applications">
                    <li onclick="window.location.href='error.php'"><img src="../resources/img/msn.png" alt="internet explorer icon"></li>
                    <li><img src="../resources/img/my_computer.png" alt="internet explorer icon"></li>
                    <li><img src="../resources/img/my_network_places.png" alt="internet explorer icon"></li>
                </ul>
                <span class="time">
                    14:34
                </span>
            </div>
    </div>
    <script src="../resources/js/main.js"></script>
</body>
</html>