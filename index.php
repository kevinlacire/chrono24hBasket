<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Accueil | USNC Basket - Union Sportive de Noyal-Châtillon/Seiche</title>
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="Site de l'association de l'USNC Basket de Noyal-Châtillon sur Seiche">
    <meta name="author"         content="Kévin LACIRE">
    <link rel="icon"            type="image/jpg" href="img/logoPlayer.jpg" />

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">

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
                  <!--<li><a href="boutique.php" title="Boutique de l'USNC pour la saison">Boutique</a></li>-->
                  <!--<li><a href="sponsors.php" title="Liste des sponsors de la saison">Sponsors</a></li>-->
                  <li><a href="24h.php" title="24h Basket">24h Basket</a></li>
                  <li><a href="acces.php" title="Nous trouver">Accès</a></li>
                  <!--<li><a href="contact.php" title="Contacter l'USNC Basket">Contact</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="hero-unit index">
        <a href="/"><img src="img/header.png" title="Accueil du site de l'association de l'USNC Basket de Noyal-Châtillon sur Seiche" /></a>
      </div>
    </header>
    <div class="container">
      <h1>Ce Week-end : </h1>
      <div class="row">
        <img class="span12" src="img/24h.jpg" alt="24H Basket" />
      </div>
      <!--<h1>Bienvenue sur le site de l'USNC Basket</h1>
      <div class="row">
        <img class="span6" src="img/logoPlayer.jpg" alt="Logo de l'association USNC Basket" />
        <p class="span6 lead pagination-justify">Le club de Noyal Chatillon sur seiche est composé de nombreuses équipes, pour un total de 170 licenciés répartis en 16 équipes allant de la première division à la pré-région réparties des mini poussins aux séniors. <a href="http://www.macadambasket.fr" >Macadam</a> est notre nouveau sponsors pour cette saison. Ce partenariat permet aux membres de l'USNC Basket de bénéficier d'une remise de <strong>10%</strong> sur tous le magasin.</p>
      </div>-->
      <h2>Dates clés de la saison 2015-2016 :</h2>
      <div class="row">
        <ul class="span8 unstyled lead">
          <li>- Tournoi de pré-saison : <strong>3 Septembre 2016</strong> <a href="pdf/tournoiPreSaison.pdf">(bulletin d'inscription)</a></li>
          <!--<li>- Forum des associations : <strong>5 Septembre 2015</strong></li>-->
          <li><a href="24h.php">- 24 heures basket : <strong>7 et 8 mai 2016</a></strong></li>
          <li>- Tournoi Détente : <strong>29 Janvier 2016</strong></li>
          <li>- Tournoi humoristique : <strong>2 Avril 2016</strong></li>
          <li>- Assemblée Générale USNC : <strong>date à préciser</strong></li>
        </ul>
        <table class="span4 pagination-centered table-bordered table-striped">
          <caption class="lead"><strong>Résultats du week-end dernier</strong></caption>
          <thead>
            <tr>
              <th>USNC</th>
              <th>Score</th>
              <th>Score</th>
              <th>Adversaire</th>
            </tr>
          </thead>
          <tbody>
            <tr class="error">
              <td>U11 mixte</td>
              <td>27</td>
              <td>53</td>
              <td>Bruz</td>
            </tr>
            <tr class="error">
              <td>U13F</td>
              <td>28</td>
              <td>32</td>
              <td>CPB</td>
            </tr>
            <!--<tr class="success">
              <td>U13M1</td>
              <td>36</td>
              <td>43</td>
              <td>Chantepie</td>
            </tr>-->
            <tr class="success">
              <td>U13M2</td>
              <td>72</td>
              <td>36</td>
              <td>Pont Péan</td>
            </tr>
            <tr class="success">
              <td>U15F</td>
              <td>34</td>
              <td>44</td>
              <td>Chantepie-Chateaugiron</td>
            </tr>
            <tr class="error">
              <td>U17F</td>
              <td>28</td>
              <td>42</td>
              <td>Landujan</td>
            </tr>
            <tr class="success">
              <td>SF</td>
              <td>35</td>
              <td>51</td>
              <td>Miniac</td>
            </tr>
            <tr class="success">
              <td>SG2</td>
              <td>65</td>
              <td>58</td>
              <td>Rennes CPB</td>
            </tr>
            <tr class="error">
              <td>SG1</td>
              <td>53</td>
              <td>33</td>
              <td>La Guerche</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <?php require 'includes/footer.php' ?>
