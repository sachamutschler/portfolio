<!DOCTYPE html>
<html lang="fr">
<?php include('Templates/head.php'); ?>
<body>
    <div class="fichier window" id="fichier">
        <?php require ('Templates/navbar.php') ?>
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
                    <h5 class="titre-liste-dossier">Épreuve E4 – Support et mise à disposition de services informatiques</h5>
                    <div class="double-column">
                        <div class="column-dossier">
                            <a href="../resources/E4/E4_EvalE5.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Eval-E5</span>
                            </div>
                            </a>
                            <a href="../resources/E4/E4_It4Y_DI.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | ServiceNow</span>
                            </div>
                            </a>
                            <a href="../resources/E4/E4_Dendo.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Dendo-Jitensha</span>
                            </div>
                            </a>
                            <a href="../resources/E4/E4_Horus.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Horus Web</span>
                            </div>
                            </a>
                            <a href="../resources/E4/Tab_Synt_E4.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/editor.png" alt="txt" class="icon-list">
                                <span class="first">Tableau de synthèse</span>
                            </div>
                            </a>
                        </div>
                        <div class="column-dossier">
                            <a href="../resources/E4/E4_ARP.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MITM</span>
                            </div>
                            </a>
                            <a href="../resources/E4/E4_iOS.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MobileIron</span>
                            </div>
                            </a>
                            <a href="../resources/E4/E4_W10MECM.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">E4 | MECM</span>
                            </div>
                            </a>
                            <div class="ligne-fichier-dossier" onclick="window.location.href='a-propos.php'">
                                <img src="../resources/img/helpsupport.png" alt="txt" class="icon-list">
                                <span class="first">E4 | Parcours Pro</span>
                            </div>
                            <a href="../resources/E4/ppe4.pdf">
                            <div class="ligne-fichier-dossier">
                                <img src="../resources/img/application-pdf.png" alt="txt" class="icon-list">
                                <span class="first">PowerPoint E4</span>
                            </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div> 
    <?php require ('Templates/bottom-bar.php'); ?>
    <script src="../resources/js/main.js"></script>
</body>
</html>