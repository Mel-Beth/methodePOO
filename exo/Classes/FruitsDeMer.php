<?php
require_once 'Produits.php';

class FruitsDeMer extends Produit {
    public function __construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation) {
        parent::__construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation, null);
    }

    public function estConservable() {
        $dateAujourdhui = new DateTime();
        return $dateAujourdhui <= $this->dateConservation;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Produit conservable : " . ($this->estConservable() ? "Oui" : "Non") . "<br>";
    }
}
?>
