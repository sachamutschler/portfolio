<!DOCTYPE html>
<html lang="fr">
<?php include('head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <div class="navbar_dossier">
            <div class="title-bar">
                <div class="title-bar-text">Portfolio Sacha Mutschler</div>
                    <div class="title-bar-controls">
                    <button aria-label="Close" onclick="window.location.href='index-copy.php'"></button>
                </div>
            </div>
        </div>
        
            <div class="">
                <ul class="navbar-dossier nav-under">
                    <li><a href="#">Fichier</a></li>
                    <li><a href="#">Edition</a></li>
                    <li><a href="#">Affichage</a></li>
                    <li><a href="#">Favoris</a></li>
                    <li><a href="#">Outils</a></li>
                    <li><a href="#">?</a></li>
                </ul>
            </div>
            <div>
                <div>
                   <div>
                        <h4 class="sous-titre-dossier">Gestion des fichiers</h4>
                        <p>Créer un nouveau dossier</p>
                        <p>Publier ce dossier sur le Web</p>
                        <p>Partager ce dossier</p>
                   </div>
                   <div>
                        <h4 class="sous-titre-dossier">Autres emplacements</h4>
                        <p>Bureau</p>
                        <p>Documents partagés</p>
                        <p>Poste de travail</p>
                        <p>Favoris réseau</p>
                   </div> 
                   <div>
                       <h4 class="sous-titre-dossier"></h4>
                       <p>Mes documents</p>
                       <p>Dossier système</p>
                   </div>
                </div>
                <div class="liste-dossier">
                    <div>
                        <img src="resources/img/textdoc.png" alt="txt" class="menu-icon">
                        <div>
                            <span class="first">Mon CV</span>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        
        
    </div> 
    
    <div id="navbar">
        <?php 
            require('menu.php');
        ?>
        <button class="logo-vert button-start-menu">
            <img src="resources/img/Windows_logo.png" alt="" class="logo-windows">
                start
        </button>
        <div class="blur-right-bar">
                <ul class="blur-right-bar-applications">
                    <li onclick="window.location.href='error.php'"><img src="resources/img/msn.png" alt="internet explorer icon"></li>
                    <li><img src="resources/img/my_computer.png" alt="internet explorer icon"></li>
                    <li><img src="resources/img/my_network_places.png" alt="internet explorer icon"></li>
                </ul>
                <span class="time">
                    14:34
                </span>
            </div>
    </div>
    <script src="resources/js/main.js"></script>
</body>
</html>