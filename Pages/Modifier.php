<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'ufr/sds';
$username = 'root';
$password = '';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion a la base de donnees : " . $e->getMessage());
}

// Vérifier si l'étudiant existe déjà dans la base de données
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    
    $query = $bdd->prepare("SELECT * FROM etudiants WHERE nom = :nom AND prenom = :prenom AND date_de_naissance = :date_naissance");
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':date_de_naissance', $date_de_naissance);
    $query->execute();
    
    $etudiant = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$etudiant) {
        echo "L'etudiant n'existe pas dans la base de donnees.";
        // Afficher le formulaire pour saisir les informations
    } else {
        // L'etudiant existe, afficher le formulaire de modification avec les informations pre-remplies
        $tuteur = $etudiant['tuteur'];
        $date_adhesion = $etudiant['date_adhesion'];
        ?>
        <form method="post" action="">
            <input type="hidden" name="etudiant_id" value="<?php echo $etudiant['id']; ?>">
            Nom: <input type="text" name="nom" value="<?php echo $nom; ?>"><br>
            Prenom: <input type="text" name="prenom" value="<?php echo $prenom; ?>"><br>
            Date de naissance: <input type="date" name="date_de_naissance" value="<?php echo $date_de_naissance; ?>"><br>
            Tuteur: <input type="text" name="tuteur" value="<?php echo $tuteur; ?>"><br>
            Date d'adhesion: <input type="date" name="date_adhesion" value="<?php echo $date_adhesion; ?>"><br>
            <input type="submit" name="modifier" value="Modifier">
        </form>
        <?php
    }
}

// Code pour gérer la soumission du formulaire de modification
if (isset($_POST['modifier'])) {
    $etudiant_id = $_POST['etudiant_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $tuteur = $_POST['tuteur'];
    $date_adhesion = $_POST['date_adhesion'];
    
    // Mettre à jour les informations de l'étudiant dans la base de données
    $query = $bdd->prepare("UPDATE etudiants SET nom = :nom, prenom = :prenom, date_de_naissance = :date_de_naissance, tuteur = :tuteur, date_adhesion = :date_adhesion WHERE id = :etudiant_id");
 }