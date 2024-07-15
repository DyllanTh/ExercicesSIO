<?php
// Classe Personne
class Personne {
    // Propriétés
    private $nom;
    private $age;
    private $salaire;

    // Constructeur
    public function __construct($nom, $salaire, $age) {
        $this->nom = $nom;
        $this->age = $age;
        $this->salaire = $salaire;
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

    public function getSalaire() {
        return $this->salaire;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    } 
}

