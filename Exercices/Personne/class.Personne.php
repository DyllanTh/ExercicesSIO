<?php
class Personne {

    // Propriétés : caractéristiques

    private $nom;
    private $age;


    // Méthodes : Pour le nom

    public function recupererNom():string {
        return $this->nom;
    }

    public function modifierNom(string $nouvNom):void {
        $this->nom = $nouvNom;
    }

    // Méthodes : Pour l'âge

    public function recupererAge():int {
        return $this->age;
    }

    public function modifierAge(int $nouvAge):void {
        $this->age = $nouvAge;
    }
}