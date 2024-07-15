<?php
class Salarie {
    private $nom;
    private $salaire;

    public function __construct($nom, $salaire) {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }
}
