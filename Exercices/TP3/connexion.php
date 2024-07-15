<?php
// Démarrez la session
session_start();

// Adresse email et mot de passe valides (à des fins de démonstration)
$validEmail = "dyllan.thouvignon@gmail.com";
$validPassword = "test";

// Récupérez les données soumises par le formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifiez si les données soumises correspondent aux données valides
if ($email === $validEmail && $password === $validPassword) {
    // Si les informations sont correctes, enregistrez l'utilisateur dans la session
    $_SESSION['user'] = $email;
    
    // Redirigez l'utilisateur vers la page de contenu
    header('Location: contenu.php');
} else {
    // Si les informations sont incorrectes, enregistrez un message d'erreur dans la session
    $_SESSION['error_message'] = "Email ou mot de passe incorrect.";
    
    // Redirigez l'utilisateur vers la page de connexion avec le message d'erreur
    header('Location: connexion.html');
}
?>
