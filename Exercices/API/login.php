<?php
header('Content-Type: application/json');

// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base_de_donnees = "api";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupérer les données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Éviter les injections SQL (utilisez des déclarations préparées dans un environnement de production)
    $email = $connexion->real_escape_string($email);
    $mot_de_passe = $connexion->real_escape_string($mot_de_passe);

    // Requête pour vérifier les informations de connexion
    $requete = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $resultat = $connexion->query($requete);

    // Construire la réponse JSON
    $reponse = array();

    if ($resultat->num_rows > 0) {
        // L'utilisateur est authentifié avec succès
        $reponse["success"] = true;
        $reponse["message"] = "Authentification réussie !";
    } else {
        // L'utilisateur n'est pas authentifié
        $reponse["success"] = false;
        $reponse["message"] = "Échec de l'authentification. Vérifiez vos identifiants.";
    }

    // Renvoyer la réponse JSON
    echo json_encode($reponse);
}
else {
    // La méthode de requête n'est pas valide
    $reponse["success"] = false;
    $reponse["message"] = "Méthode de requête HTTP non valide !";

    // Renvoyer la réponse JSON
    echo json_encode($reponse);
}

// Fermer la connexion
$connexion->close();
?>
