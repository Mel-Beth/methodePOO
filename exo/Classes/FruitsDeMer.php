<?php
require_once 'Produits.php';

class FruitsDeMer extends Produit {

    // Constructeur spécifique pour FruitsDeMer
    public function __construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation) {
        parent::__construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation, null);
    }

    // Méthode : Vérifie si le produit est encore consommable
    public function estConservable() {
        $dateAujourdhui = new DateTime();
        return $dateAujourdhui <= new DateTime($this->getDateConservation());
    }

    // Méthode : Affiche les détails spécifiques
    public function afficherDetails() {
        parent::afficherDetails();
        echo "Produit conservable : " . ($this->estConservable() ? "Oui" : "Non") . "<br>";
    }
}
?>
