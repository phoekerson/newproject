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
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="training.php">La Belle Assiette</a>
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
              <h1 class="text-capitalize py-3 banniere-desc"> Restaurant MultiSaveur à votre </br> goût dans la ville de </br>DAPAONG</h1>
              <p>
                <button class="btn btn-order ms-1 ">Commandez maintenant</button>
              </p>
            </div>
          
        </div>
      </section>
      <!-- creation d'une section pour les specialités-->
      <section class="carte merryweather py-5">
            <div class="container">
              <div class="row">
                <div class="card mb-3 border-0 rounded-0">
                  <div class="row">
                    <div class="col md-6">
                      <img src="images/cook.jpg" class="img-fluid">
                    </div>
                    <div class="col md-6">
                      <div class="card-body">
                        <h5 class="card-title">Cuisine Africaine</h5>
                        <p class="card-text">Decouvrez les meilleurs repas Africain chez nous à des prix abordables </p>
                        <p class="card-text"><a href="commande.php" class="btn">Commandez</a></p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="card mb-3 border-0 rounded-0">
                  <div class="row">
                    <div class="col md-6">
                      <div class="card-body">
                        <h5 class="card-title">Cuisine Européenne</h5>
                        <p class="card-text">Decouvrez les meilleurs repas Africains chez nous à des prix abordables </p>
                        <p class="card-text"><a href="commande.php" class="btn">Commandez</a></p>
                        
                      </div>
                    </div>
                    <div class="col md-6">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/télécharger.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/desert.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/cuisine.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
                  </div>

                </div>
              </div>
            </div>
      </section>
        <!-- creation d'une section de proposition d'autres services-->
      <section class="caleb-menu py-5 merriweather">
        <div class="container">
          <div class="row">
            <h3 class="text-center text-light"> Nos autres services</h3>
            <div class="card text-center bg-transparent">
              <div class="card-header">
                <ul class="nav nav-tabs justify-content-center  card-header-tabs">
                  <li class="nav-item">
                    <a href="training.php" class="nav-link active" aria-current="true">Resto</a>
                  </li>
                  <li class="nav-item">
                    <a href="bar.php" class="nav-link text-light">Bar</a>
                  </li>
                  <li class="nav-item">
                    <a href="hotel.php" class="nav-link text-light">Hotel</a>
                  </li>
                </ul>

              </div>
              <div class="card-body text-light">
                <h5 class="card-title"> Decouvrez nos autres services</h5>
                <p class="card-text"> Le meilleur restaurant dans la ville de Dapaong </p>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="images/burger.jpg" alt=" image d'un burger" class="card-img-top"/>
                <div class="card-body">
                  <h5 class="card-title"> Des plats uniquement pour vous
                  </h5>
                  <p class="card-text">Ne souffrez plus pour vous offrir un repas qualitatif . Commandez en un clic</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/cuisine.jpg" alt="" class="card-img-top"/>
                <div class="card-body">
                  <h5 class="card-title"> Decouvrez nos locaux
                  </h5>
                  <p class="card-text">Venez manger dans un espace sain et propice à une bonne digestion.</p>
                </div>
              </div>
            </div>
            
          </div>
      </section>
      <!-- creation d'une classe pour indiquer l'emplacement du restaurant-->
      <section class="caleb-caroussel bg-dark merriweather text-light text-center py-5">
        <div class="container">
          <div class="row">
            <h1 class="uppercase">Les Délices Des Savanes</h1>
              <div class="col pb-4">
                Nous sommes situés dans le quartier Nassable2 au niveau de l'ecole primaire SoS , à 400m de 
                la route nationale numero1 . Nous faisons des livraisons à domicile dans de brefs délais.
              </div>
          </div>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/cuisson.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/cook.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/desert.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
       <!-- creation d'une section pour permettre aux utilisateurs de contacter le service client-->
      <section class="order-form py-5">
        <div class="container">
          <h2 class="merriweather text-light text-center mb-4" id="ancre1"> Contactez nous </h2>
        
        <div class="row">
          <div class="col md-6 sm col-sm">
            <div class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Votre nom de famille"
              />
          </div>
        </div>
          <div class="col md-6 sm col-sm">
            <div class="input-group mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="Votre email"
                />
            </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="number"
                class="form-control"
                placeholder="Votre numero de telephone"
                />
            </div>
          </div>
         <div class="input-group">
          <textarea class="form-control" placeholder="Entrez un message"></textarea>
         </div>
          </div>
        </div>
      </form>
      <li class="nav-item py-4 text-center">
        <a class="btn caleb-btn " href="#" rounded-0>Envoyer</a>
      </li>
        </div>
      </section>
           <!-- creation d'une section css pour afficher le footer de la page-->
      <section class="caleb-footer text-center">
        <div class="container">
          <div class="row">
            <nav class="nav flex-column">
              <a href="training.php" class="nav-link active" aria-current="page">Accueil</a>
              <a href="commande.php" class="nav-link active">Commande</a>
              <a href="#" class="nav-link active">Contacts</a>
              <a href="https://wa.me/+22898428196" target="_blank" class="nav-link active">Chercher un developpeur</a>
              <nav class="nav-link disabled" tabindex="-1" aria-disabled="true">Copyright, CalebCoding2023 </nav>
            </nav>
          </div>
        </div>
      </section>







       <!-- Mon propre fichier css pour ecraser le css bootstrap-->
    <link rel="stylesheet" type="text/css" href="style.css">
  </body>
</html>