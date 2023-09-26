<?php
      include 'connect.php';
      include_once('paiements/privateKeys.php');
?>
<!doctype html>
<!-- Page d'accueil du restaurant-->
<html lang="fr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    

    <title>Restaurant La belle assiette </title>
  </head>
       <!-- Corps de la page-->
  <body>
    

    <nav class="caleb-navbar navbar navbar-expand-lg position-fixed w-100 navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3 text-light" href="#">La Belle Assiette</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- Creation du menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item pe-4">
          <a class="nav-link active" aria-current="page" href="training.php">Accueil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link active" href="commande.php">Découvrir</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link active" href="#ancre1">Contact</a>
          
        </li>
         <li class="nav-item pe-4">
          <a class="btn btn-order" href="commande.php" rounded-0>Commander maintenant</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <section class="banniere  d-flex justify-content-center align-items-center pt-5">
        <div class="container py-5 my-5">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 py-5">
              <h1 class="text-capitalize py-3 banniere-desc text-light"> Restaurant MultiSaveur à votre </br> goût dans la ville de </br>DAPAONG</h1>
              <p>
                <button class="btn btn-order ms-1">Commandez maintenant</button>
                
              </p>
              <h3 class="text-capitalize py-7 banniere-desc text-light text-center"> Commandez et faites vous livrer rapidement </h3>
            </div>
          
        </div>
      </section>
      <!-- creation d'une section pour la liste des repas à commander-->
      <?php
 include 'connect.php';
 ?>

    
</section>
    <section class="d-flex justify-content-center align-items-center pt-5">
       

    <?php
        $sql = "SELECT * FROM `crud` ";
        $result = mysqli_query($con,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $nom = $row['nom'];
            $lien = $row['lien'];
            $prix = $row['prix'];
            $description = $row['description'];
            echo '
            <div class="card align-items-center justify-content-center" style="width: 19rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">   
                <div class="card align-items-center" style="width: 18rem;">
                    <img src="images/poulet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$nom.'</h5>
                      <p class="card-text">'.$description.' </p>
                      <p class="card-text text-success"> PRIX DU REPAS : '.$prix.' FCFA</p>
                      <button class="kkiapay-button btn btn-primary">Commander
                      <script
                      amount='.$prix.'
                      callback="'.header("Location: $lien").'"
                      data=""
                      url="<url-vers-votre-logo>"
                      position="center" 
                      theme="#0095ff"
                      sandbox="true"
                      key="'.$public_key.'"
                      src="https://cdn.kkiapay.me/k.js">
                      </script>
                      </button>
                    </div>
                  </div>
            </li>
            </ul>
            </div>
            ';
            
        }
        
      }
    






?>






              
      <!--  <div class="card align-items-center justify-content-center" style="width: 19rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">   
                <div class="card align-items-center" style="width: 18rem;">
                    <img src="images/poulet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Poulet braisé</h5>
                      <p class="card-text">Le meilleur poulet poulet braisé fait par nos experts en cuisine </p>
                      <a href="final.html" class="btn btn-primary">Commander</a>
                    </div>
                  </div>

            
            
            
            
            
            </li>
-->

    
  
 <!-- ajout de mon css pour ecraser les proprietes bootstrap-->
<link  rel="stylesheet" href="commande.css" type="text/css">
<script src="https://cdn.kkiapay.me/k.js"></script>
</body>