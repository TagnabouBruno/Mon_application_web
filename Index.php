<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>INSCRIPTION</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    <link rel="stylesheet" href="Styles/Style.css">
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
  </head>
  <body class="bodi">
    <header class="head">
    <div id="master_site_wrapper">
      <main role="main">
        <div class="container-fluid no-padding">
          <section class="no-padding" id="destination-masthead">

            <div id="masthead_wrapper" class="col-xs-12">
              <div class="masthead-content-wrapper">
                <div class="destinations-section-wrapper green">
                </div>
                <div class="masthead-content">
                  <div class="title-container">
                    <h2 class="title red">UFR<span class="nored">/</span>SDS</h2>
                    <h5 class="subtitle">Ouagadougou, BF</h5>
                  </div>
                </div>
              </div>
            </div> 
          </section>
        </div>
      </main>
    </div>
    </header>
    <div class="container">
        <div class="row">
          <div class="col">
          <p class="liste"><a href="Pages/Listes.php" class="color"><button>Listes</button></a></p>
          </div>
        </div>
    </div>
    
    <div id="container">
      <div class="form-box">
        <h1>UFR/SDS</h1>
        <form class="c-form" name="c-form" action="Php/Inscription.php" method="post">
          <div class="two-columns">
            <fieldset>
              <label class="c-form-label" for="last-name">Nom<span class="c-form-required"> *</span></label>
              <input id="last-name" class="c-form-input" type="text" name="nom" required>
            </fieldset>

            <fieldset>
              <label class="c-form-label" for="first-name">Prenom<span class="c-form-required"> *</span></label>
              <input id="first-name" class="c-form-input" type="text" name="prenom" required>
            </fieldset>
          </div>

          <fieldset>
            <label class="c-form-label" for="email">Date de naissance<span class="c-form-required"> *</span></label>
            <input id="email" class="c-form-input" type="date" name="date_de_naissance" required>
          </fieldset>

          <fieldset>
            <label class="c-form-label" for="subject">Date d'adhesion<span class="c-form-required"> *</span></label>
            <input id="subject" class="c-form-input" type="date" name="date_adhesion" required>
          </fieldset>

          <fieldset>
            <label class="c-form-label" for="comments">Tuteur<span class="c-form-required"> *</span></label>
            <input id="comments" class="c-form-input" name="tuteur" required></textarea>
          </fieldset>
          <button class="c-form-btn" type="submit">Enregistrer</button>
        </form>
      </div>
    </div><br><br><br><br><br>
    <footer class="footer">
        <div class="icons">
            <p class="company-name">
                ABC &copy; 2021, ALL Rights Reserved
            </p>
        </div>
    </footer>
  </body>
</html>