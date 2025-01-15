<?php

    // Ma classe qui définit ce qu'est un produit

    class Product {

        private $nom;
        private $prix;
        private $marque;
        private $taille;

        public function definir_nom($parametre) {

            // Sécurité pour éviter que l'on puisse définir le nom avec une chaîne de caractère contenant ' ou ".
            if ( str_contains($parametre,"'") || str_contains($parametre,"\"") ) {
                echo("Nom de produit interdit.<br><br>");
            } else {
                $this->nom = $parametre;
            }
            
        }

        public function afficher_nom() {
            echo($this->nom . "<br><br>");
        }

        public function definir_prix($parametre) {

            // Sécurité pour éviter que l'on puisse définir le prix avec autre chose que des nombres entieres ou à virgule.
            if ( is_numeric($parametre) ) {
                $this->prix = $parametre;
            } else {
                echo("Prix de produit interdit.<br><br>");
            }

        }

        public function afficher_prix() {
            echo("Le prix de ce produit est de : " . $this->prix . " €.<br><br>");
        }

    }

?>