
<?php
include 'connect.php';
?>






<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS et javascript -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js" ></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">ADMINISTRATION DE LA BASE DE DONNEES </h1>
    <!--- création d'une section pour la mise en place des blocs --->
           <section class="caleb-coding">
           <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ADMINER LE RESTAURANT</h5>
        <p class="card-text">Cliquez sur les bouttons suivants pour adminer le restaurants</p>
        <a href="user.php" class="btn btn-primary">AJOUTER DE NOUVEAUX REPAS </a> </br> </br> </br>
        <a href="display.php" class="btn btn-primary">LISTE ET MODIFICATION DES REPAS </a> </br> </br> </br>
        <a href="user_resto.php" class="btn btn-primary">LISTE DES COMMANDES  </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ADMINER L'HOTEL</h5>
        <p class="card-text">Cliquez sur les boutons suivants pour adminer l'hotel</p>
        <a href="admin_hotel.php" class="btn btn-primary">AJOUTER DE NOUVELLES CHAMBRES </a> </br> </br></br>
        <a href="display_hotel.php" class="btn btn-primary">LISTE ET MODIFICATION DES CHAMBRES </a> </br> </br> </br>
        <a href="user_hotel.php" class="btn btn-primary">LISTE DES RESERVATIONS  </a>
      </div>
    </div>
  </div>
</div>



    
      <!-- ajout de mon css pour ecraser les proprietes bootstrap-->
      <link  rel="stylesheet" href="style.css" type="text/css">

  </body>
</html>