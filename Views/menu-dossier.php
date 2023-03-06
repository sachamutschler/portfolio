<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <?php require ('Templates/navbar.php'); ?>
            <div class="cont-gestion-dossier">
                <div class="sommaire">
                   <div class="div-sommaire-dossier">
                        <h4 class="sous-titre-dossier">Gestion des fichiers</h4>
                        <div class="prgs">
                            <div class="ligne-dossier">
                                <img src="../resources/img/folder-new.png" class="img-ligne">
                                <p>Créer un nouveau dossier</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="../resources/img/mywebsite.png" class="img-ligne">
                                <p>Publier ce dossier sur le Web</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="../resources/img/applications-email-panel.png" class="img-ligne">
                                <p>Partager ce dossier</p>
                            </div>
                        </div>
                   </div>
                   <div class="div-sommaire-dossier">
                        <h4 class="sous-titre-dossier">Autres emplacements</h4>
                        <div class="prgs">
                            <div class="ligne-dossier">
                                <img src="../resources/img/preferences-desktop-display.png" class="img-ligne">
                                <p>Bureau</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="../resources/img/shared%20folder.png" class="img-ligne">
                                <p>Documents partagés</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="../resources/img/mycomp.png" class="img-ligne">
                                <p>Poste de travail</p>
                            </div>
                            <div class="ligne-dossier">
                                <img src="../resources/img/mynetwork.png" class="img-ligne">
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
                    <h5 class="titre-liste-dossier">Fichiers enregistrés sur cet ordinateur</h5>
                    <div class="double-column">
                        <div class="column-dossier">
                            <div class="ligne-fichier-dossier" onclick="window.location.href='cv.php'">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">Mon CV</span>
                            </div>
                        </div>
                        <div class="column-dossier">
                            <div class="ligne-fichier-dossier" onclick="window.location.href='projets.php'">
                                <img src="../resources/img/controlpanel.png" alt="txt" class="icon-list">
                                <span class="first">Mes projets</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='file-contact.php'">
                                <img src="../resources/img/applications-email-panel.png" alt="txt" class="icon-list">
                                <span class="first">Contact</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='a-propos.php'">
                                <img src="../resources/img/helpsupport.png" alt="txt" class="icon-list">
                                <span class="first">A Propos</span>
                            </div>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='veille.php'">
                                <img src="../resources/img/myrecent.png" alt="txt" class="icon-list">
                                <span class="first">Veille Technologique</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php require ('Templates/bottom-bar.php') ?>
    <script src="../resources/js/main.js"></script>
</body>
</html>