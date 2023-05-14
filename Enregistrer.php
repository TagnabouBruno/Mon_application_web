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

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$date_inscription = $_POST['date_inscription'];



// Insertion des données dans la base de données
$sql = "INSERT INTO etudiants (nom, prenom, date_naissance, date_inscription) VALUES ('$nom', '$prenom', '$date_naissance', '$date_inscription')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Enregistrement reussi</h1>";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>