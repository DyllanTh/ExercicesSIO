<?php
// Classe Personne
class Personne {
    // Propriétés
    private $nom;
    private $age;
    private $specialisation;

    // Constructeur
    public function __construct($nom, $specialisation, $age) {
        $this->nom = $nom;
        $this->age = $age;
        $this->specialisation = $specialisation;
    }

    // Getters et Setters
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSpecialisation() {
        return $this->specialisation;
    }

    public function setSpecialisation($specialisation) {
        $this->specialisation = $specialisation;
    } 
}

