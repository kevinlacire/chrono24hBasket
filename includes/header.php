<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title; ?> | USNC Basket - Union Sportive de Noyal-Châtillon/Seiche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de l'association de l'USNC Basket de Noyal-Châtillon sur Seiche">
        <meta name="author" content="Kévin LACIRE">
        <link rel="icon" type="image/jpg" href="img/logoPlayer.jpg" />
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/24h.css" rel="stylesheet">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="css/bootstrap-responsive.min.css" rel="stylesheet">-->
        <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav>
                <div class="navbar navbar-usnc navbar-static-top">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="brand" href="/"><img src="img/usnc_logo.png" alt="USNC Basket" title="Retourner à la page d'accueil"></a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li><a href="index.php" title="Retourner à l'accueil">Accueil</a></li>
                                    <li><a href="bureau.php" title="Organigramme du bureau de la saison">Bureau</a></li>
                                    <li><a href="entrainement.php" title="Planning des entrainements">Entraînement</a></li>
                                    <li><a href="boutique.php" title="Boutique de l'USNC pour la saison">Boutique</a></li>
                                    <li><a href="sponsors.php" title="Liste des sponsors de la saison">Sponsors</a></li>
                                    <li><a href="24h.php" title="24h Basket">24h Basket</a></li>
                                    <li><a href="acces.php" title="Nous trouver">Accès</a></li>
                                    <li><a href="contact.php" title="Contacter l'USNC Basket">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
<?php $saisons = "2013-2014"; ?>
<?php $annee1 = "2013"; ?>
<?php $annee2 = "2014"; ?>