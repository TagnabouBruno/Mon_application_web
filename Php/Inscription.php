<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbName = 'ufr/sds';
$user = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password);
    // Configuration de PDO pour afficher les erreurs SQL
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date_de_naissance'];
$date_adhesion = $_POST['date_adhesion'];
$tuteur = $_POST['tuteur'];

// Vérification des données
if (empty($nom) || empty($prenom) || empty($date_de_naissance) || empty($date_adhesion) || empty($tuteur)) {
    die('Veuillez remplir tous les champs du formulaire.');
}

// Vérification si l'utilisateur existe déjà dans la base de données
$stmt = $db->prepare('SELECT COUNT(*) FROM etudiants WHERE nom = :nom AND prenom = :prenom');
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->execute();
if ($stmt->fetchColumn() > 0) {
    die('Cet utilisateur est deja enregistre.');
}

// Insertion des données dans la base de données
$stmt = $db->prepare('INSERT INTO etudiants (nom, prenom, date_de_naissance, date_adhesion, tuteur) VALUES (:nom, :prenom, :date_de_naissance, :date_adhesion, :tuteur)');
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':date_de_naissance', $date_de_naissance);
$stmt->bindParam(':date_adhesion', $date_adhesion);
$stmt->bindParam(':tuteur', $tuteur);
$stmt->execute();

echo 'Les donnees ont ete enregistrees avec succes dans la base de donnees.';
?>
<p><a href="../Index.php">Retour</a></p>
