<?php
session_start(); // Démarrez la session

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION['user'])) {

    // Inclure une feuille de style CSS pour formater la page (utilisation de 'link rel')
    echo '<link rel="stylesheet" href="style.css" type="text/css">';
    echo '<h2>Bienvenue, ' . $_SESSION['user'] . '</h2>';
    echo '<p>Contenu incroyable, il y a beaucoup de choses</p>';
    echo '<a href="deconnexion.php">Déconnexion</a>';
} else {
    // L'utilisateur n'est pas connecté, affichez un message d'erreur et un lien vers la page de connexion
    echo '<h2>Aucune personne n\'est connectée.</h2>';
    echo '<a href="connexion.html">Se connecter</a>';
}
?>
