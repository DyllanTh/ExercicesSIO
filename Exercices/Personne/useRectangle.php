<?php
require 'class.Rectangle.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    
    $rectangle = new Rectangle($longueur, $largeur);

    $perimeter = $rectangle->recupererPerimetre();
    $area = $rectangle->recupererAire();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>useRectangle</title>
</head>
<body>
    <form action="useRectangle.php" method="post">
        <fieldset>
            <legend>Rectangle</legend>
            <label for="longueur">Longueur</label>
            <input type="number" name="longueur" id="longueur" required>
            <label for="largeur">Largeur</label>
            <input type="number" name="largeur" id="largeur" required>
            <input type="submit" value="Calculer">
        </fieldset>
    </form>

    <?php
    if (isset($rectangle)) {
        echo "<p>Le périmètre du rectangle est : $perimeter</p>";
        echo "<p>L'aire du rectangle est : $area</p>";
    }
    ?>
</body>
</html>
