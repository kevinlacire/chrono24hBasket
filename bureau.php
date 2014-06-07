<?php $title = "Bureau" ?>
<?php require 'includes/header.php' ?>
<div class="container">
    <h1>Organigramme du bureau de l'USNC Basket pour la saison <?php echo $saisons; ?></h1>
    <address class="pagination-centered">
        <h4>Romain LARDEUX</h4>
        <strong>Président - Comité 35 : réunion, AG  - USNC : réunion, AG - Relation Mairie Noyal</strong><br>
        <a href="mailto:romainlardeux@yahoo.fr">Contacter le président</a>
    </address>
    <div class="row">
        <?php require 'includes/leftList.php' ?>
        <?php require 'includes/midList.php' ?>
        <?php require 'includes/rightList.php' ?>
    </div>
    <h3 class="pagination-centered"><strong>Tous les membres du bureau sont joignables via la page de contact.</strong></h3>
</div>
<?php require 'includes/footer.php';