<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=universite', 'root', '');

// Récupération des données du formulaire de connexion
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

// Vérification des informations de connexion dans la base de données
$req = $bdd->prepare('SELECT * FROM etudiants WHERE nom = ? AND prenom = ?');
$req->execute(array($nom, $prenom));
$resultat = $req->fetch();

if (!$resultat) {
    // Si les informations de connexion sont incorrectes, renvoyer l'utilisateur vers la page de connexion avec un message d'erreur
    header('Location: connexion.php?erreur=1');
} else {
    // Si les informations de connexion sont correctes, rediriger l'utilisateur vers la page suivante
    header('Location: Liste.php');
}
?>