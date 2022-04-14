
<div class="w-100 conteneur-form">

<form action="" method="post" name="contact-form" class="contact-form w-50">

    <div class="div_titre">
        <h2 id="titre">Contactez moi ! </h2>
    </div>

    <div>
        <div class="conteneur_contact1">
            <div class="div_form div_form1">
                <input class="form-control" type="text" placeholder="Objet" aria-label="default input example" name="objet">
            </div>
            <div class="div_form">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adresse mail" name="email">
            </div>
        </div>
        
        <div class="cont_desc">
            <textarea class="form-control description" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Description"></textarea>
        </div>

        <div class="cont_btn">
            <button type="submit" name="button" class="btn" id="btn">Envoyer</button>

        </div>
        

    </div>
    
</form>
</div>
<?php


if(isset($_POST['button'])) {
    $objet = $_POST['objet'];
    $message = $_POST['description'];
    $mail = $_POST['email'];
    $headers = 'FROM: '. $mail;
    mail('contactdendo@gmail.com', $objet, $message, $headers);
}
elseif(isset($_POST['button'])){
    echo('Une erreur est survenue');
}