<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/accueil.css" />
  <link rel="stylesheet" href="assets/css/menu.css" />
  <title>Simplon - Ecole Régionale du Numérique Narbonne</title>
</head>
<body id="haut">
  <div class="content">
    <header class="header">
      <?php include("includes/templates/header.php"); ?>
      <div class="titres">
        <img src="assets/img/ern.png" class="ern" alt="logo Ecole Regionale du Numérique"/>
        <h1 class="h1">Simplon</h1>
        <img src="assets/img/logoNarbonne.png" alt="Simplon"/>
        <h3 class="h3">Narbonne 2017</h3>
      </div>
      <div class="divScnd">
        <ul class="menuScnd">
          <li class="test"><a href="./a_propos.php">Introduction</a></li>
          <li class="test"><a href="./outils.php">Outils</a></li>
          <li class="test"><a href="./lexique/lexique.php">Lexique</a></li>
          <li class="test"><a href="./projet.php">Nos projets</a></li>
          <li class="test"><a href="./trombi.php">Trombinoscope</a></li>
        </ul>
      </div>
    </header>
  </div>
  <?php include("./includes/templates/footer.php") ?>
</body>
</html>
