<?php

class Rectangle {
    
        // Propriétés : caractéristiques
    
        private $longueur;
        private $largeur;

        // Méthodes : Pour la longueur

        public function recupererLongueur():float {
            return $this->longueur;
        }
        
        // Méthodes : Pour la largeur

        public function recupererLargeur():float {
            return $this->largeur;
        }

        // Méthodes : Pour le périmètre

        public function recupererPerimetre():float {
            return ($this->longueur + $this->largeur) * 2;
        }

        // Méthodes : Pour l'aire

        public function recupererAire():float {
            return $this->longueur * $this->largeur;
        }
}