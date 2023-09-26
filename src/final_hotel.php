<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $nom = $_POST['nom'];
  $chambre = $_POST['chambre'];
  $code = $_POST['code'];
  $numero = $_POST['numero'];
  $prix = $_POST['prix'];
 


  $sql = "INSERT INTO `crudm`( `nom`, `chambre`, `code`, `numero`, `prix`) VALUES ('$nom','$chambre','$code','$numero','$prix')";
  $result = mysqli_query($con,$sql);
  if($result){
      echo "";
  }else{
      die(mysqli_error($con));
  }
}
?>

















<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>HOTEL LES RETROUVAILLES</title>
  </head>
  <body>   
    <!-- création d'une section pour finaliser la commande-->
    <h1 class="text-center">Finalisez votre reservation</h1>
    <section class="justify-content-center align-items-center pt-5">
        <form class="row g-3" method="post">
            <div class="col-md-6">
              <label for="inputText4" class="form-label"  >Entrez votre nom </label>
              <input type="text" class="form-control" id="inputText4" name = "nom">
            </div>
            <div class="col-md-6">
              <label for="inputText4" class="form-label" >Entrez le type de chambre dont vous avez payé </label>
              <input type="text" class="form-control" id="inputText4" name="chambre">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Entrez un code secret</label>
              <input type="password" class="form-control" id="inputAddress" name="code" >
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Entrez votre numero de telephone</label>
              <input type="text" class="form-control" id="inputAddress2" name="numero">
            </div>
            <div class="col-12">
                <label for="number" class="form-label">Entrez le prix de la reservation </label>
                <input type="text" class="form-control" name="prix"  aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">FCFA</span>
</div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Quartier</label>
              <select id="inputState" class="form-select">
                <option selected>Komboloaga</option>
                <option>Nassable1</option>
                <option>Nassable2</option>
                <option>Worgou</option>
                <option>Tingbane</option>
                <option>Kampatibe</option>
                <option>Zongo</option>
              </select>
            </div>
        
            
            <div class="col-12 justify-content-center text-center">
              <p class="text-danger"> NB : Entrez le prix exact que vous venez d'envoyer si non votre reservation ne sera pas validée. </p>
              <p class="text-danger"> NB : Evitez d'entrer des caracteres spéciaux(ex : + ? = & etc...) ou des apostrophes dans les champs . </p>
            <button class="btn btn-primary" type="submit" name="submit">Confirmer la reservation</button>
            </div>
          </form>



































    </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

   
   
  </body>
</html>