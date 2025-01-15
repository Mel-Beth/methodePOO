<?php

    require("./Jeu.php");

    class JeuVideo extends Jeu {

        // Propriétés

        private $plateformes = [];
        private $listePlateformesAutorisees = [];

        // Méthodes

        public function __construct($titre) {
            
            $this->titre = $titre;

        }

        public function afficherTitre() {
            echo("Ce jeu vidéo s'appelle : " . $this->titre);
        }

        public function definirPlateforme($nomPlateforme) {

            if ( in_array($nomPlateforme,$this->listePlateformesAutorisees) ) {
                array_push($this->plateformes,$nomPlateforme);
            } else {
                echo("La plateforme doit faire partie de cette liste :");
                var_dump($this->listePlateformesAutorisees);
            }

        }

        public function ajouterPlateformeAutorisees($nomPlateforme) {

            array_push($this->listePlateformesAutorisees,$nomPlateforme);

        }

        public function afficherPlateformes() {
            var_dump($this->plateformes);
        }

        public function afficherListePlateformes() {
            var_dump($this->listePlateformesAutorisees);
        }

    }

?>