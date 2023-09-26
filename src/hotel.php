<!doctype html>
<html lang="fr">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js" ></script>



    <title>Hotel les retrouvailles</title>
  </head>
  <body>
    <nav class="caleb-navbar navbar navbar-expand-lg position-fixed w-100 navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#">HOTEL LES RETROUVAILLES</a>
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
            <a class="btn btn-order" href="commande.php" rounded-0>Commander un plat</a>
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
                <h1 class="text-capitalize py-3 banniere-desc"> Reservez une chambre en ligne</br> Dans notre magnifique Hotel </br></h1>
                <p>
                  <button class="btn btn-order ms-1 "> <a href="chambre.php" class="text-decoration-none text-light"> Reservez une chambre</a></button>
                </p>
              </div>
            
          </div>
        </section>

        
        <section class="carte merryweather py-5">
            <div class="container">
              <div class="row">
                <div class="card mb-3 border-0 rounded-0">
                  <div class="row">
                    <div class="col md-6">
                      <img src="images/employé2.jpg" class="img-fluid">
                    </div>
                    <div class="col md-6">
                      <div class="card-body">
                        <h5 class="card-title">Un service client prompt</h5>
                        <p class="card-text">Venez découvrir nos chambres accompagné d'une bonne prise en charge pour vous faire passer un séjour agréable </p>
                        <p class="card-text"><a href="chambre.php" class="btn">Reservez une chambre</a></p>
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
                        <h5 class="card-title">Chambre climatisé et ventilé à votre service</h5>
                        <p class="card-text">Decouvrez nos chambres dotées de système de ventilation ou de climatisation pour vous permettre de passez des séjours idéals à votre productivité</p>
                        <p class="card-text"><a href="chambre.php" class="btn">Reservez une chambre</a></p>
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
                            <img src="images/hotel2.jpg" class="d-block w-100" alt="image illustrant un hotel">
                          </div>
                          <div class="carousel-item">
                            <img src="images/hotel3.jpg" class="d-block w-100" alt="image illustrant une chambre d'hotel">
                          </div>
                          <div class="carousel-item">
                            <img src="images/hotel1.jpg" class="d-block w-100" alt="image illustrant une chambre d'hotel">
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


<section class="caleb-caroussel bg-dark merriweather text-light text-center py-5">
        <div class="container">
          <div class="row">
            <h1 class="uppercase">HOTEL LES RETROUVAILLES</h1>
              <div class="col pb-4">
                Nous sommes situés dans le quartier Nassable2 au niveau de l'ecole primaire SoS , à 400m de 
                la route nationale numero1 . Reservez votre chambre en ligne.
              </div>
          </div>
</section>

      <!-- creation d'une section css pour afficher le footer de la page-->
      <section class="caleb-footer text-center">
        <div class="container">
          <div class="row">
            <nav class="nav flex-column">
              <a href="hotel.php" class="nav-link active"  aria-current="page">Accueil</a>
              <a href="commande.php" class="nav-link active">Commander un repas </a>
              <a href="#" class="nav-link active">Contacts</a>
              <a href="https://wa.me/+22898428196" target="_blank" class="nav-link active">Chercher un developpeur</a>
              <nav class="nav-link disabled" tabindex="-1" aria-disabled="true">Copyright, CalebCoding2023 </nav>
            </nav>
          </div>
        </div>
      </section>


           
       
              


















    

   
    












    <link rel="stylesheet" href="style.css">

  </body>
</html>