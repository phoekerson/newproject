<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $nom = $_POST['nom'];
  $plat = $_POST['plat'];
  $prix = $_POST['prix'];
  $adresse = $_POST['adresse'];
  $emplacement = $_POST['emplacement'];
  $ville = $_POST['ville'];


  $sql = "INSERT INTO `crudbcm`(`nom`, `plat`, `adresse`, `emplacement`, `prix`, `ville`) VALUES ('$nom','$plat','$adresse','$emplacement','$prix','$ville')";
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

    <title>Restaurant la belle assiette</title>
  </head>
  <body>   
    <!-- création d'une section pour finaliser la commande-->
    <h1 class="text-center">Finalisez votre commande</h1>
    <section class="justify-content-center align-items-center pt-5">
        <form class="row g-3" method="post">
            <div class="col-md-6">
              <label for="inputText4" class="form-label"  >Entrez votre nom </label>
              <input type="text" class="form-control" id="inputText4" name = "nom">
            </div>
            <div class="col-md-6">
              <label for="inputText4" class="form-label" >Précisez votre plat</label>
              <input type="text" class="form-control" id="inputText4" name="plat">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="inputAddress" name="adresse" placeholder="Quartier Komboloaga">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Préciser votre emplacement </label>
              <input type="text" class="form-control" id="inputAddress2" name="emplacement" placeholder=" Faites une description de votre lieu d'habitation ">
            </div>
            <div class="col-12">
                <label for="number" class="form-label">Entrez le prix du repas </label>
                <input type="text" class="form-control" name="prix"  aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">FCFA</span>
              </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Ville</label>
              <input type="text" class="form-control" name ="ville" id="inputCity">
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
              <p class="text-danger"> NB : Entrez le prix exact que vous venez d'envoyer si non votre commande ne sera pas validée. </p>
              <p class="text-danger"> NB : Evitez d'entrer des caracteres spéciaux ou des apostrophes dans les champs . </p>
            <button class="btn btn-primary" type="submit" name="submit">Confirmer la commande</button>
            </div>
          </form>



































    </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

   
   
  </body>
</html>