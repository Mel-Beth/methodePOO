<?php
require_once 'Produits.php';

class Poisson extends Produit {

    // Constructeur spécifique pour Poissonnerie
    public function __construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche) {
        parent::__construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche, $dateDePeche);
    }

    // Méthode : Vérifie si le poisson est frais
    public function estFrais() {
        $dateAujourdhui = new DateTime();
        $interval = $this->getDateDePeche() ? (new DateTime($this->getDateDePeche()))->diff($dateAujourdhui) : null;
        return $interval && $interval->days <= 3; // Considéré frais si pêché il y a moins de 3 jours
    }

    // Méthode : Affiche les détails spécifiques
    public function afficherDetails() {
        parent::afficherDetails();
        echo "Produit frais : " . ($this->estFrais() ? "Oui" : "Non") . "<br>";
    }
}
?>
