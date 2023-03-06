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
                    <img src="resources/img/Windows_logo.png" alt="" srcset="" class="logo-nav-dossier">
                </div>
            </div>
            <div class="div2-navbar-dossier">
                <div class="div-retour" onclick="window.location.href='menu-dossier.php'">
                    <img src="resources/img/redo.png" class="">
                    <p>Précédente</p>
                </div>
                <img src="resources/img/search.png" class="retour">
                <img src="resources/img/shared folder.png" class="retour">
            </div>
            
                
                <div class="liste-dossier">
                    <h5 class="titre-liste-dossier">A propos de moi :   </h5>
                    <div class="double-column">
                        <div class="text-about">
                            <img src="resources/img/photo_sacha_lidl.jpg" alt="sacha mutschler" class="photo">
                            <p>Je me présente ! je m'appelle Sacha, j'ai 23 ans et suis développeur Web.</p> 
                            <p>J'étudie au sein de l'école Iris à Strasbourg en effectuant un BTS SIO (Services Informatiques aux Organisations) option SLAM (Solution Logiciel et Application Métier).</p>
                            <p>Vous l'aurez deviné, mon portfolio s'inspire du très célèbre Windows XP, quelque peu revisité.
                                <br>Vous y retrouverez mon CV, une présentation du BTS SIO, quelques éléments nécessaire à mes examens (E4, E5) et plus bas vous retrouverez mes certifications Openclassrooms et mes réseaux sociaux.</p>
                            <h5>Mes certifications :</h5>
                            <div class="certifs">
                                <a href="resources/img/8072464850 Certif IA ocr.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Int_Art</span>
                                    </div>
                                </a>
                                <a href="resources/img/OCR_leadership.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Leadership</span>
                                    </div>
                                </a>
                                <a href="resources/img/4208813541OCR_Speak.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Speak</span>
                                    </div>
                                </a>
                            </div>
                            <div class="certifs">
                                <a href="resources/img/2664435226 Travail en autonomie.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Autonomie</span>
                                    </div>
                                </a>
                                <a href="resources/img/CertifOCR_Projet_pro.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Projet pro</span>
                                    </div>
                                </a>
                                <a href="resources/img/ocr_gerer_temps.pdf">
                                    <div class="ligne-fichier-dossier">
                                        <img src="resources/img/Logo_OpenClassrooms.png" alt="txt" class="icon-list">
                                        <span class="first">Gérer Temps</span>
                                    </div>
                                </a>
                            </div>
                            <h5>Mes réseaux sociaux : </h5>
                            <a href="https://www.linkedin.com/in/sacha-mutschler-218775150/">
                                <div class="ligne-fichier-dossier">
                                    <img src="resources/img/linkedin.png" alt="txt" class="icon-list">
                                    <span class="first">Linkedin</span>
                                </div>
                            </a>
                            <a href="https://github.com/sachamutschler">
                                <div class="ligne-fichier-dossier">
                                    <img src="resources/img/github.png" alt="txt" class="icon-list">
                                    <span class="first">GitHub</span>
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