<?php
require_once 'Produits.php';

class Poissonnerie extends Produit {
    public function __construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche) {
        parent::__construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche, $dateDePeche);
    }

    public function estFrais() {
        $dateAujourdhui = new DateTime();
        $interval = $this->dateDePeche->diff($dateAujourdhui);
        return $interval->days <= 3;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Produit frais : " . ($this->estFrais() ? "Oui" : "Non") . "<br>";
    }
}
?>
