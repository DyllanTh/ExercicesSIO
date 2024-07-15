<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $codepostal = $_POST["codepostal"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=multimedia", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO client (nom, prenom, adresse, ville, codepostal, email, age) VALUES (:nom, :prenom, :adresse, :ville, :codepostal, :email, :age)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':codepostal', $codepostal);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->execute();

        echo "Client ajouté avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
    }
}
?>
