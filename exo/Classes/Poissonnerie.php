<?php
require_once 'Produits.php';

// Classe Poissonnerie hérite de Produit
class Poissonnerie extends Produit {

    // Constructeur : Initialise les propriétés spécifiques à Poissonnerie
    public function __construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche) {
        // Appelle le constructeur de Produit avec une dateDePeche
        parent::__construct($nom, $prixParKg, $poids, $origine, $labelEco, $fournisseur, $dateDePeche, $dateDePeche);
    }

    // Méthode : Vérifie si le poisson est encore frais
    public function estFrais() {
        $dateAujourdhui = new DateTime(); // Date actuelle
        $interval = $this->dateDePeche->diff($dateAujourdhui); // Différence entre aujourd'hui et la date de pêche
        return $interval->days <= 3; // Considéré frais si pêché il y a 3 jours ou moins
    }

    // Méthode : Affiche les détails spécifiques à Poissonnerie
    public function afficherDetails() {
        parent::afficherDetails(); // Appelle la méthode de la classe parente pour afficher les propriétés communes
        echo "Produit frais : " . ($this->estFrais() ? "Oui" : "Non") . "<br>"; // Indique si le poisson est encore frais
    }
}
?>
