<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $lien = $_POST['lien'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];

    $sql = "insert into `crud`(`nom`, `lien`, `prix`, `description`) VALUES ('$nom','$lien','$prix','$description')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "données inserées dans la base de données avec succès";
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
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    

    <title>Panneau d'administration du restaurant</title>
  </head>
  <body>
    <h1 class="text-center"> ADMINISTRATION DU RESTAURANT </h1>
    <a class="btn btn-primary" href="panneau_admin.php"> RETOURNER A LA BASE DE DONNNE </a>
    <section class="admin py-5">
    <div class="container">
        <div class="row">
            <form method="post">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Repas</span>
  <input type="text" class="form-control" name="nom" placeholder="Nom du repas">
</div>

<label for="basic-url" class="form-label">lien vers la commande du repas</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" name="lien" id="basic-url">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">FCFA</span>
  <input type="text" class="form-control" name="prix" placeholder="prix du repas">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group">
  <span class="input-group-text">Description du repas</span>
  <textarea class="form-control" name="description" ></textarea>
</div>
<div>
  <label for="formFileLg" class="form-label">Entrez la photo du repas</label>
  <input class="form-control form-control-lg" name="photo" id="formFileLg" type="file">
</div> 
            
<div class="col-12 py-5">
    <button class="btn btn-primary" type="submit" name="submit">Envoyer</button>
  </div>
</form>
        </div>
    </div>

    
    

    
  </body>
</html>


