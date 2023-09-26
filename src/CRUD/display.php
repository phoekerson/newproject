<?php
 include 'connect.php';
 ?>





<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <title>Restaurant</title>
  </head>
  <body>
  <a class="btn btn-primary" href="panneau_admin.php"> RETOURNER A LA BASE DE DONNNE </a>
    <section class="text-center">
    <h1>PANNEAU D'ADMINISTRATION</h1>
    
    <button class="btn btn-primary"> <a class="text-light text-decoration-none" href="user.php"> Ajouter de nouveaux plats</a> </button>
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
                      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none"> Update </a></button>
                      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none"> Delete </a></button>
                    </div>
                  </div>
            </li>
            </ul>
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

    
  </body>
</html>