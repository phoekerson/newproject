
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

    <title>liste des commandes</title>
  </head>
  <body>













<section class="  pt-5">
       

       <?php
           $sql = "SELECT * FROM `crudbcm`";
           $result = mysqli_query($con,$sql);
           if($result){
             while($row=mysqli_fetch_assoc($result)){
               $idk = $row['idk'];
               $nom = $row['nom'];
               $plat = $row['plat'];
               $adresse = $row['adresse'];
               $emplacement = $row['emplacement'];
               $ville = $row['ville'];
               $prix = $row['prix'];
               echo ' <table class="table">
               <thead>
                 <tr>
                   <th scope="col">Noms</th>
                   <th scope="col">Plats</th>
                   <th scope="col">Adresse</th>
                   <th scope="col">Emplacement</th>
                   <th scope="col">Ville</th>
                   <th scope="col">Prix</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">'.$nom.'</th>
                   <td>'.$plat.'</td>
                   <td>'.$adresse.'</td>
                   <td>'.$emplacement.'</td>
                   <td>'.$ville.'</td>
                   <td>'.$prix.' FCFA</td>
                   <td> <button class="btn btn-danger"><a href="delete_list_resto.php?delete_list_restoid='.$idk.'" class="text-light text-decoration-none"> Delete </a></button></td>
                   
                 </tr>
                 
               </tbody>
             </table>
               ';
           }
         }
    ?>

    
      <!-- ajout de mon css pour ecraser les proprietes bootstrap-->
      <link  rel="stylesheet" href="style.css" type="text/css">

  </body>
</html>