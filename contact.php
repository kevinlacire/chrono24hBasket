<?php $title = "Contact"; ?>
<?php require 'includes/header.php'; ?>
<div class="container">
    <h1>Contactez un membre du Bureau</h1>
    <div class="row">
        <form method="POST" class="unstyled span5">
            <input class="span5" type="text" name="adrMail" placeholder="Entrez votre email ici" />
            <select class="span5" name="destinataire">
                <option value="default" selected="selected">Destinataire</option>
                <option value="romainlardeux@yahoo.fr">LARDEUX Romain</option>
                <option value="michel.belhote@orange.fr">BELHÔTE Michel</option>
                <option value="antoineperrudin@orange.fr">PERRUDIN Antoine</option>
                <option value="tichatpatou@gmail.com">DAUCÉ Patricia</option>
                <option value="fabi.dauce.peatier@gmail.com">DAUCÉ-PÉATIER Fabienne</option>
                <option value="arnaud.chesnais@hotmail.fr">CHESNAIS Arnaud</option>
                <option value="martine.chesnais@free.fr">CHESNAIS Martine</option>
                <option value="cordeirodavid35230@gmail.com">CORDEIRO David</option>
                <option value="cguegan@kpmg.fr">GUEGAN Cédric</option>
                <option value="padel_35@orange.fr">BOYER-HEULOT Delphine</option>
                <option value="ericbaske@numericable.fr">LEFEVRE Éric</option>
                <option value="legendre_mickael@yahoo.fr">LEGENDRE Mickael</option>
                <option value="chabphil@neuf.fr">CHABRIER Philippe</option>
                <option value="taz9@wanadoo.fr">MORIN Maryvonne</option>
                <option value="kevinthefirst@gmail.com">LACIRE Kévin</option>
                <option value="gregendrot@gmail.com">GENDROT Grégory</option>
                <option value="jeanbaptise.departout@gmail.com">DEPARTOUT Jean-Baptiste</option>
                <option value="juliecollet@hotmail.fr">COLLET Julie</option>
                <option value="tardif.max@gmail.com">TARDIF Maxime</option>
            </select>
            <textarea class="span5" type="text" name="emailContent" rows="10"></textarea>
            <input class="btn btn-success" type="submit" value="Envoyer" />&#32;<input class="btn btn-warning" type="reset" value="Effacer" />
        </form>
        <div class="span5 pagination-centered">
            <p>Vous pouvez retrouver les vidéos et photos de l'association USNC Basket sur notre page facebook</p>
            <a class="pagination-centered" href="http://www.facebook.com/pages/USNC-Basket/262332547132042?sk=wall" title="Retrouvez nous sur facebook"><img src="img/facebook.png" alt="logo Facebook" /></a>
        </div>		
    </div>
    <p class="pagination-centered alert alert-info">L'adresse que vous renseignez nous permettra de vous répondre dans les plus brefs délais.</p>
    <?php
    //récupération des données passées par le formulaire
    if (isset($_POST['adrMail']) && (isset($_POST['emailContent'])) && (isset($_POST['destinataire']))) {
        extract($_POST);
        if (!empty($adrMail) && !empty($emailContent) && !empty($destinataire)) {
            $entete = "From: $adrMail \n Reply-To : $adrMail ";
            //traitement sur le message
            $emailContent = addslashes($emailContent);
            $emailContent = str_replace("\'", "'", $emailContent);
            $objet = 'Email envoyé depuis le site USNC Basket. Emetteur : ' . $adrMail;
            //envoi du mail avec l'adresse mail du destinataire l'objet et le message
            $ok = mail($destinataire, $objet, $emailContent, $entete);
            //Vérification de l'envoi du mail
            if ($ok) {
                echo "<p class=\"success\" >Message envoyé avec succès !</p>";
            } else {
                echo "<p class=\"error\" >Envoi du message impossible. Veuillez réessayer</p>";
            }
        } else {
            echo "<p class=\"error\" >Vous n'avez pas entré toutes les données requises</p>";
        }
    }
    ?>
</div>
<?php require 'includes/footer.php' ?>
