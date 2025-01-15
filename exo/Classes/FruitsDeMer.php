<?php
require_once 'Produits.php';

// Classe FruitsDeMer hérite de Produit
class FruitsDeMer extends Produit {

    // Constructeur : Initialise les propriétés spécifiques à FruitsDeMer
    public function __construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation) {
        // Appelle le constructeur de Produit avec une dateDePeche null (non applicable pour FruitsDeMer)
        parent::__construct($nom, $prixParUnite, $poids, $origine, $labelEco, $fournisseur, $dateConservation, null);
    }

    // Méthode : Vérifie si le produit est encore consommable
    public function estConservable() {
        $dateAujourdhui = new DateTime(); // Date actuelle
        return $dateAujourdhui <= $this->dateConservation; // Comparaison avec la date de conservation
    }

    // Méthode : Affiche les détails spécifiques à FruitsDeMer
    public function afficherDetails() {
        parent::afficherDetails(); // Appelle la méthode de la classe parente pour afficher les propriétés communes
        echo "Produit conservable : " . ($this->estConservable() ? "Oui" : "Non") . "<br>"; // Indique si le produit est encore conservable
    }
}
?>
