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

// Récupération de l'ID de l'étudiant à supprimer
if (isset($_GET['id'])) {
    $id = $_GET['id'];


// Requête de suppression
$sql = "DELETE FROM etudiants WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header(('location: ../Pages/listes.php'));
} else {
    echo "Aucun ID d'etudiant specifie.";
    exit;
}
?>
