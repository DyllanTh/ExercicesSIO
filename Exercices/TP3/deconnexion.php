<?php
// Démarrez la session
session_start();

// Détruisez la session actuelle, ce qui déconnecte l'utilisateur
session_destroy();

// Redirigez l'utilisateur vers la page de connexion après la déconnexion
header('Location: connexion.php');
?>
