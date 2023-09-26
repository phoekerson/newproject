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
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3 text-light" href="#">HOTEL LES RETROUVAILLES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- Creation du menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item pe-4">
          <a class="nav-link active" aria-current="page" href="hotel.php">Accueil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link active" href="chambre.php">Découvrir</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link active" href="#ancre1">Contact</a>
        </li>
         <li class="nav-item pe-4">
          <a class="btn btn-order" href="commande.php" rounded-0>Commander un repas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <section class="banniere2  d-flex justify-content-center align-items-center pt-5">
        <div class="container py-5 my-5">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 py-5">
              <h1 class="text-capitalize py-3 banniere-desc text-light">  Reservez une chambre en ligne</br> Dans notre magnifique Hotel </br></h1>
              <p>
                <button class="btn btn-order ms-1">Reservez maintenant</button>
              </p>
              
            </div>
          
        </div>
      </section>
      <!-- creation d'une section pour la liste des chambres climatisées-->
      

    

    <section class="d-flex justify-content-center align-items-center pt-5">
       

    <?php
        $sql = "SELECT * FROM `crudbc` ";
        $result = mysqli_query($con,$sql);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $ide = $row['ide'];
            $chambres = $row['chambres'];
            $descriptions = $row['descriptions'];
            $prixx = $row['prixx'];
            $liens = $row['liens'];
            $urlCalback= header("Location: $lien");
            echo '
            <div class="card align-items-center justify-content-center" style="width: 19rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">   
                <div class="card align-items-center" style="width: 18rem;">
                    <img src="images/poulet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$chambres.'</h5>
                      <p class="card-text">'.$descriptions.' </p>
                      <p class="card-text text-success"> PRIX DE LA CHAMBRE : '.$prixx.' FCFA</p>
                      
                      <button class="kkiapay-button btn btn-primary">Reserver
                      
                      </button>
                    </div>
                  </div>
            </li>
            </ul>
            ';
        }
      }
     
    

        ?>
    </section>






              
     

    
  
      <!-- ajout de mon css pour ecraser les proprietes bootstrap-->
<link  rel="stylesheet" href="style.css" type="text/css">
<script src="https://cdn.kkiapay.me/k.js"></script>
<script>

</script>
 </body>