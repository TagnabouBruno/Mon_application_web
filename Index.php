<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription des etudiants</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <section class="slider">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/image3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>UFR/SDS</h1>
                    <h1><span class="A1">U</span>nite de <span class="A1">F</span>ormation et de <span class="A1">R</span>echerche en <span class="A1">S</span>cience de la <span class="A1">S</span>ante</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>UFR/SDS</h1>
                    <h1><span class="A1">U</span>nite de <span class="A1">F</span>ormation et de <span class="A1">R</span>echerche en <span class="A1">S</span>cience de la <span class="A1">S</span>ante</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/image4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>UFR/SDS</h1>
                    <h1><span class="A1">U</span>nite de <span class="A1">F</span>ormation et de <span class="A1">R</span>echerche en <span class="A1">S</span>cience de la <span class="A1">S</span>ante</h1>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col AA1">
                <h1><abbr title="Unite de Formation et de Recherche en Science de Sante">UFR/SDS</abbr></h1>
            </div>
            <div class="col AAA">
                <ul>
                <li><a href="#Inscription"> S'inscrire</a></li>
                </ul>
                <ul>
                    <li><a href="#Connexion"> Se connecter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="B1">
        <h1><span class="A1">U</span>nite de <span class="A1">F</span>ormation et de <span class="A1">R</span>echerche en <span class="A1">S</span>cience de la <span class="A1">S</span>ante</h1>
        <h2>UFR/SDS</h2>
    </section>
    <section id="Inscription">
        <h1 class="centre">S'inscrire?</h1>
	    <form method="POST" action="Enregistrer.php" id="champ">
            <fieldset form="champ">
                <label><h1>Inscription des étudiants</h1></label>
		        <label for="nom">Nom:</label>
		        <input type="text" name="nom" id="nom" required><br><br>
		        <label for="prenom">Prénom:</label>
		        <input type="text" name="prenom" id="prenom" required><br><br>
		        <label for="date_naissance">Date de naissance:</label>
		        <input type="date" name="date_naissance" id="date_naissance" required><br><br>
		        <label for="date_inscription">Date d'inscription:</label>
		        <input type="date" name="date_inscription" id="date_inscription" required><br><br>
		        <input type="submit" value="Enregistrer">
            </fieldset>
        </form>
    </section>
    <section id="Connexion">
        <h1 class="centre">Se connecter?</h1>
	    <form method="POST" action="Connexion.php" id="champ">
            <fieldset form="champ">
                <label><h1>Connexion</h1></label><br><br>
		        <label for="nom">Nom:</label>
		        <input type="text" name="nom" id="nom" required><br><br>
		        <label for="prenom">Prénom:</label>
		        <input type="text" name="prenom" id="prenom" required><br><br>
                <input type="submit" value="Se connecter">
            </fieldset>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <footer>
        <div class="wrapper">
            <footer class="container-fluid">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h1 class="flipOutX">Spam Is Awesome! </h1>
                  <form class="form-inline">
                    <div class="form-group">
                      <input class="email" type="email" />
                      <button type="button" class="btn btn-default" >
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      </button>
                    </div>
                  </form> 
                  <p>We look forward to killing your inbox with annoying endelss spam!!!</p>
                </div>
                <div class="col-md-12">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <div class="row text-center ">
                      <div class="col-md-4 icon-container fadeInLeftBig"><i class="fa fa-facebook-official fa-3x" role="button"></i></div>
                      <div class="col-md-4"><i class="fa fa-linkedin fa-3x" role="button"></i></div>
                      <div class="col-md-4"><i class="fa fa-twitter fa-3x" role="button"></i></div>
                    </div>
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <div class="col-md-12 footer-footer">
                  <div class="col-md-2"><p><a href="">Designed By Mark Grover</a></p></div>
                  <div class="col-md-2"></div>
                  <div class="col-md-2"></div>
                  <div class="col-md-2"></div>
                  <div class="col-md-2"><p><a href="">Contact</a></p></div>
                  <div class="col-md-2"><p><a href="">Customer Care</a></p></div>
                </div>
              </div>
            </footer>
          </div>
    </footer>
</body>
</html>