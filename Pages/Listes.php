<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
</body>
</html>
<?php
// Étape 1 : Connexion à la base de données
$host = 'localhost';
$db = 'ufr/sds';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion a la base de donnees : ' . $e->getMessage());
}

// Étape 3 : Récupération et affichage des utilisateurs
$query = "SELECT * FROM etudiants";
$stmt = $pdo->query($query);
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listes</title>
    <link rel="stylesheet" href="../Styles/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/Style.css">
</head>
<body class="container">
    <h1 class="bo boo">Affichage des etudiants</h1>

    <table class="table bo">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Date d'adhesion</th>
            <th>Tuteur</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
        <?php foreach ($etudiants as $row): 
        echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo'<td>'.$row['nom'].'</td>';
            echo'<td>'.$row['prenom'].'</td>';
            echo'<td>'.$row['date_de_naissance'].'</td>';
            echo'<td>'.$row['date_adhesion'].'</td>';
            echo'<td>'.$row['tuteur'].'</td>';
            echo'<td><a href="../Php/Modification.php?id='.$row['id'].'" class="color">Modifier</a></td>';
            echo'<td> <a href="../Php/Suppression.php?id='.$row['id'].'" class="color">Supprimer</a></td>';
       echo '</tr>'; ?>
        <?php endforeach; ?>
    </table>
    <p><a href="../Index.php" class="color">retour</a></p><br><br><br><br><br>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
       <footer class="footer">
        <div class="icons">
            <p class="company-name">
                ABC &copy; 2021, ALL Rights Reserved
            </p>
        </div>
    </footer> 
    </body>
    </html>
