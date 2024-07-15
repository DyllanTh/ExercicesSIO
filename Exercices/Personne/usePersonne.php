<?php
require 'class.Personne.php';
//Créer des objets :

$durand = new Personne(); // instanciation (un objet : instance est le résultat de l'instanciation)

/*
$durand->nom = 'Durand';
$durand->age = 35;
*/

$durand->modifierNom('Durand');
$durand->modifierAge(35);

echo "Nom : ".$durand->recupererNom(). "Age : ".$durand->recupererAge()."ans.<br/>";