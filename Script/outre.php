<?php
// Étape 1 : Connexion à la base de données
$host = 'localhost'; // Remplacez par l'adresse de votre serveur de base de données
$db = 'ufr/sds'; // Remplacez par le nom de votre base de données
$user = 'root'; // Remplacez par le nom d'utilisateur de la base de données
$password = ''; // Remplacez par le mot de passe de la base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Étape 2 : Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $date_adhesion = $_POST['date_adhesion'];
    $tuteur = $_POST['tuteur'];

    // Vérifier si l'utilisateur est déjà inscrit
    $query = "SELECT COUNT(*) FROM utilisateurs WHERE nom = :nom AND prenom = :prenom";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['nom' => $nom, 'prenom' => $prenom]);

    if ($stmt->fetchColumn() > 0) {
        die('Cet utilisateur est déjà inscrit.');
    }

    // Insertion des données dans la base de données
    $query = "INSERT INTO utilisateurs (nom, prenom, date_naissance, date_adhesion, tuteur) VALUES (:nom, :prenom, :dateNaissance, :dateAdhesion, :tuteur)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'dateNaissance' => $dateNaissance,
        'dateAdhesion' => $dateAdhesion,
        'tuteur' => $tuteur
    ]);

    echo 'L\'utilisateur a été inscrit avec succès.';
}

// Étape 3 : Récupération et affichage des utilisateurs
$query = "SELECT * FROM utilisateurs";
$stmt = $pdo->query($query);
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des utilisateurs</title>
</head>
<body>
    <h1>Affichage des utilisateurs</h1>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Date d'adhésion</th>
            <th>Tuteur</th>
        </tr>
        <?php foreach ($utilisateurs as $utilisateur): ?>
        <tr>
            <td><?php echo $utilisateur['nom']; ?></td>
            <td><?php echo $utilisateur['prenom']; ?></td>
            <td><?php echo $utilisateur['date_naissance']; ?></td>
            <td><?php echo $utilisateur['date_adhesion']; ?></td>
            <td><?php echo $utilisateur['tuteur']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Modifier mes informations</h2>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br>

        <label for="date_adhesion">Date d'adhésion :</label>
        <input type="date" id="date_adhesion" name="date_adhesion" required><br>

        <label for="tuteur">Tuteur :</label>
        <input type="text" id="tuteur" name="tuteur" required><br>

        <input type="submit" value="Modifier">
    </form>
</body>
</html>
<?php
// Configuration de la base de données
$dbHost = "localhost";
$dbName = "nom_de_votre_base_de_donnees";
$dbUser = "nom_utilisateur";
$dbPass = "mot_de_passe";

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérification du formulaire et insertion des données dans la base de données
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['date_naissance'];
    $dateAdhesion = $_POST['date_adhesion'];
    $tuteur = $_POST['tuteur'];

    // Vérification si l'utilisateur existe déjà dans la base de données
    $query = "SELECT COUNT(*) FROM utilisateur WHERE nom = :nom AND prenom = :prenom";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(':nom' => $nom, ':prenom' => $prenom));
    $count = $stmt->fetchColumn();

    if($count > 0) {
        echo "L'utilisateur existe déjà.";
    } else {
        // Insertion des données dans la base de données
        $query = "INSERT INTO utilisateur (nom, prenom, date_naissance, date_adhesion, tuteur) VALUES (:nom, :prenom, :dateNaissance, :dateAdhesion, :tuteur)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(':nom' => $nom, ':prenom' => $prenom, ':dateNaissance' => $dateNaissance, ':dateAdhesion' => $dateAdhesion, ':tuteur' => $tuteur));

        echo "Les données ont été insérées avec succès.";
    }
}

// Récupération des données de l'utilisateur pour affichage
$query = "SELECT * FROM utilisateur";
$stmt = $pdo->query($query);
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des éléments du formulaire et possibilité de modification/suppression
foreach($utilisateurs as $utilisateur) {
    echo "<table><tr>Nom : " . $utilisateur['nom'] . "<br>";
    echo "Prénom : " . $utilisateur['prenom'] . "<br>";
    echo "Date de naissance : " . $utilisateur['date_naissance'] . "<br>";
    echo "Date d'adhésion : " . $utilisateur['date_adhesion'] . "<br>";
    echo "Tuteur : " . $utilisateur['tuteur'] . "<br>";

    echo "<a href='modifier.php?id=" . $utilisateur['id'] . "'>Modifier</a>";
    echo "<a href='supprimer.php?id=" . $utilisateur['id'] . "'>Supprimer</a>";

    echo "<br><br>";
}
?>
