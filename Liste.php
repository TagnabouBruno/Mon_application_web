<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste</title>
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
<?php
// Connexion à la base de données
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'universite';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}
echo "<h1>Nos utilisateurs:</h1>";

// Récupération des données des étudiants
$sql = "SELECT * FROM etudiants";
$result = mysqli_query($conn, $sql);

// Affichage des données dans une table HTML
echo "<table class='table table-dark'>
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Date_naissance</th>
			<th>Date_inscription</th>
		</tr>";

if (mysqli_num_rows($result) > 0) {
    // Parcourir les lignes de données
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        		<td>" . $row["nom"] . "</td>
        		<td>" . $row["prenom"] . "</td>
        		<td>" . $row["date_naissance"] . "</td>
        		<td>" . $row["date_inscription"] . "</td>
        	  </tr>";
    }
} else {
    echo "0 résultats";
}

echo "</table>";

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="footer.css">
</head>
<body>
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
	</footer>
</body>
</html>