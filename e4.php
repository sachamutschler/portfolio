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
                    <img src="resources/img/Windows_logo.png" alt="" srcset="" class="logo-nav-dossier">
                </div>
            </div>
            <div class="cont-gestion-dossier">
                <div class="sommaire">
                   <div class="div-sommaire-dossier">
                        <h4 class="sous-titre-dossier">Gestion des fichiers</h4>
                        <div class="prgs">
                            <div class="ligne-dossier">
                                <img src="resources/img/folder-new.png" class="img-ligne">
                                <p>Créer un nouveau dossier</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="resources/img/mywebsite.png" class="img-ligne">
                                <p>Publier ce dossier sur le Web</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="resources/img/applications-email-panel.png" class="img-ligne">
                                <p>Partager ce dossier</p>
                            </div>
                        </div>
                   </div>
                   <div class="div-sommaire-dossier">
                        <h4 class="sous-titre-dossier">Autres emplacements</h4>
                        <div class="prgs">
                            <div class="ligne-dossier">
                                <img src="resources/img/preferences-desktop-display.png" class="img-ligne">
                                <p>Bureau</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="resources/img/shared folder.png" class="img-ligne">
                                <p>Documents partagés</p>

                            </div>
                            <div class="ligne-dossier">
                                <img src="resources/img/mycomp.png" class="img-ligne">
                                <p>Poste de travail</p>

                            </div>
                            <div class="ligne-dossier">
                                <img src="resources/img/mynetwork.png" class="img-ligne">
                                <p>Favoris réseau</p>

                            </div>
                        </div>
                   </div> 
                   <div class="div-sommaire-dossier">
                       <h4 class="sous-titre-dossier">Détails</h4>
                       <div class="detail">
                            <p>Mes documents</p>
                            <p>Dossier système</p>
                       </div>
                   </div>
                </div>
                
                <div class="liste-dossier">
                    <h5 class="titre-liste-dossier">Épreuve E4 – Support et mise à disposition de services informatiques</h5>
                    <div class="double-column">
                        <div class="column-dossier">
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Eval-E5</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/photoweb.png" alt="txt" class="icon-list">
                                <span class="first">E4 | ServiceNow</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/preferences-desktop-display.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Dendo-Jitensha</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/editor.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Horus Web</span>
                            </div>
                        </div>
                        <div class="column-dossier" onclick="window.location.href='#'">
                            <div class="ligne-fichier-dossier">
                                <img src="resources/img/controlpanel.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MITM</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/applications-email-panel.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MobileIron</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/helpsupport.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MECM</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='#'">
                                <img src="resources/img/myrecent.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Parcours Pro</span>
                            </div>
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