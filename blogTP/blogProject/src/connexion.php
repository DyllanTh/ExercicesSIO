<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pseudo']) && isset($_POST['pass'])) {
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE pseudo = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pseudo]);
    $user = $stmt->fetch();

    if ($user && password_verify($pass, $user['pass'])) {
        session_start(); // Démarre la session si ce n'est pas déjà fait

        // Stocke les informations de l'utilisateur dans la session
        $_SESSION['userId'] = $user['iduser'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['isAdmin'] = $user['isAdmin']; // Ajoutez ceci

        if ($user['isAdmin'] === 1) {
            // Si l'utilisateur est un administrateur, redirigez vers la page d'admin
            header('Location: admin.php');
        } else {
            // Sinon, redirigez vers l'espace membre
            header('Location: espacemembre.php');
        }
        exit;
    } else {
        echo '<script>alert("Login Faux !");</script>';
    }
}
?>
