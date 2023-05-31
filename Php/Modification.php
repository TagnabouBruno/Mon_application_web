<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="../Styles/Style.css">
</head>
<body class="bodi">
    <header>
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
    </header>
    <div class="container">
        <div class="row">
          <div class="col">
          <p class="liste"><a href="../Pages/Listes.php" class="color"><button>Listes</button></a></p>
          </div>
        </div>
    </div>
    
</body>
</html>


<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=ufr/sds';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connexion echouee : ' . $e->getMessage();
    exit;
}

// Récupération de l'ID de l'étudiant à modifier
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Aucun ID d'etudiant specifie.";
    exit;
}

// Traitement de la modification du compte
if (isset($_POST['modifier'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $date_adhesion = $_POST['date_adhesion'];
    $tuteur = $_POST['tuteur'];

    // Requête de mise à jour
    $sql = "UPDATE etudiants SET nom = :nom, prenom = :prenom, date_de_naissance = :date_de_naissance, date_adhesion = :date_adhesion, tuteur = :tuteur WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':date_de_naissance', $date_de_naissance);
    $stmt->bindParam(':date_adhesion', $date_adhesion);
    $stmt->bindParam(':tuteur', $tuteur);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo "Le compte etudiant a ete modifie avec succes.";
}

// Récupération des informations de l'étudiant à modifier
$sql = "SELECT * FROM etudiants WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

// Formulaire de modification du compte
?>


<div id="container">
      <div class="form-box">
        <h1>UFR/SDS</h1>
        <form class="c-form" name="c-form" action="Php/Inscription.php" method="post">
          <div class="two-columns">
            <fieldset>
              <label class="c-form-label" for="last-name">Nom<span class="c-form-required"> *</span></label>
              <input id="last-name" class="c-form-input" type="text" name="nom"value="<?php echo $etudiant['nom']; ?>"  required>
            </fieldset>

            <fieldset>
              <label class="c-form-label" for="first-name">Prenom<span class="c-form-required"> *</span></label>
              <input id="first-name" class="c-form-input" type="text"value="<?php echo $etudiant['prenom']; ?>"  name="prenom" required>
            </fieldset>
          </div>

          <fieldset>
            <label class="c-form-label" for="email">Date de naissance<span class="c-form-required"> *</span></label>
            <input id="email" class="c-form-input" type="date" name="date_de_naissance" value="<?php echo $etudiant['date_de_naissance']; ?>" required>
          </fieldset>

          <fieldset>
            <label class="c-form-label" for="subject">Date d'adhesion<span class="c-form-required"> *</span></label>
            <input id="subject" class="c-form-input" type="date" name="date_adhesion" value="<?php echo $etudiant['date_adhesion']; ?>" required>
          </fieldset>

          <fieldset>
            <label class="c-form-label" for="comments">Tuteur<span class="c-form-required"> *</span></label>
            <input id="comments" class="c-form-input" name="tuteur" value="<?php echo $etudiant['tuteur']; ?>" required></textarea>
          </fieldset>
          <button class="c-form-btn" type="submit">Enregistrer</button>
        </form>
      </div>
    </div><br><br><br>

    <footer class="footer">
        <div class="icons">
            <p class="company-name">
                ABC &copy; 2021, ALL Rights Reserved
            </p>
        </div>
    </footer>







