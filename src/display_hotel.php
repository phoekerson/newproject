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

    <section class="text-center">
    <h1>PANNEAU D'ADMINISTRATION</h1>
    <a class="btn btn-primary" href="panneau_admin.php"> RETOURNER A LA BASE DE DONNNE </a>
    <button class="btn btn-primary"> <a class="text-light text-decoration-none" href="admin_hotel.php"> Ajouter de nouvelles chambres </a> </button>
</section>
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
            echo '
            <div class="card align-items-center justify-content-center" style="width: 19rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">   
                <div class="card align-items-center" style="width: 18rem;">
                    <img src="images/poulet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$chambres.'</h5>
                      <p class="card-text">'.$descriptions.' </p>
                      <p class="card-text text-success"> PRIX DES CHAMBRES : '.$prixx.' FCFA</p>
                      <button class="btn btn-primary"><a href="update_hotel.php?update_hotelid='.$ide.'" class="text-light text-decoration-none"> Update </a></button>
                      <button class="btn btn-danger"><a href="delete_php.php?delete_phpid='.$ide.'" class="text-light text-decoration-none"> Delete </a></button>
                    </div>
                  </div>
            </li>
            </ul>
            ';
        }
      }
    






?>

    
  </body>
</html>