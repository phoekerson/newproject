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

    <title>liste des reservations</title>
  </head>
  <body>













<section class="  pt-5">
       

       <?php
           $sql = "SELECT * FROM `crudm`";
           $result = mysqli_query($con,$sql);
           if($result){
             while($row=mysqli_fetch_assoc($result)){
               $idc = $row['idc'];
               $nom = $row['nom'];
               $chambre = $row['chambre'];
               $code = $row['code'];
               $numero = $row['numero'];
               $prix = $row['prix'];
               echo ' <table class="table">
               <thead>
                 <tr>
                   <th scope="col">Noms</th>
                   <th scope="col">Type de chambre</th>
                   <th scope="col">Code</th>
                   <th scope="col">Numero</th>
                   <th scope="col">Prix</th>
                   <th scope="col">Supprimer</th>
                   
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">'.$nom.'</th>
                   <td>'.$chambre.'</td>
                   <td>'.$code.'</td>
                   <td>'.$numero.'</td>
                   <td>'.$prix.' FCFA</td>
                  <td> <button class="btn btn-danger"><a href="delete_list_hotel.php?delete_list_hotelid='.$idc.'" class="text-light text-decoration-none"> Delete </a></button></td>
                   
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