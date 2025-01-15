<?php

    class Ordinateur extends Product {

        public function __construct($parametre) {
            echo("La marque de ce produit est : " . $parametre);
        }

        public $quantite_ram;
        public $quantite_stockage;
        public $taille_ecran_pouce;
        public $processeur;
        public $systeme_exploitation;

        public function afficher_quantite_ram() {
            echo("La quantité de RAM est de 128Go.");
        }
        
    }

?>