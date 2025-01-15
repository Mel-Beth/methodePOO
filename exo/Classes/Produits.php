<?php
// Classe de base Produit
class Produit {
    // Propriétés communes à tous les produits
    protected $nom; // Nom du produit
    protected $prix; // Prix du produit
    protected $poids; // Poids du produit
    protected $dateDePeche; // Date de pêche (null si non applicable)
    protected $origine; // Origine du produit
    protected $labelEco; // Label écologique (Oui/Non)
    protected $fournisseur; // Nom du fournisseur
    protected $dateConservation; // Date de conservation

    // Constructeur : Initialise les propriétés communes
    public function __construct(
        $nom,
        $prix,
        $poids,
        $origine,
        $labelEco,
        $fournisseur,
        $dateConservation,
        $dateDePeche = null // Optionnel, peut être null
    ) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->poids = $poids;
        $this->origine = $origine;
        $this->labelEco = $labelEco;
        $this->fournisseur = $fournisseur;
        $this->dateConservation = new DateTime($dateConservation); // Date de conservation
        $this->dateDePeche = $dateDePeche ? new DateTime($dateDePeche) : null; // Date de pêche, si applicable
    }

    // Méthode : Affiche les détails communs à tous les produits
    public function afficherDetails() {
        echo "Nom : $this->nom<br>";
        echo "Prix : $this->prix €<br>";
        echo "Poids : $this->poids kg<br>";
        echo "Date de pêche : " . ($this->dateDePeche ? $this->dateDePeche->format('Y-m-d') : "Non applicable") . "<br>";
        echo "Origine : $this->origine<br>";
        echo "Éco-responsable : " . ($this->labelEco ? "Oui" : "Non") . "<br>";
        echo "Fournisseur : $this->fournisseur<br>";
        echo "Date de conservation : " . $this->dateConservation->format('Y-m-d') . "<br>";
    }
}
?>
