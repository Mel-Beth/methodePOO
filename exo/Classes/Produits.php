<?php
// Classe de base Produit
class Produit {
    // Propriétés communes à tous les produits
    private $poids; // Poids du produit
    private $dateDePeche; // Date de pêche (null si non applicable)
    private $prix; // Prix du produit
    private $origine; // Origine du produit
    private $labelEco; // Label écologique (Oui/Non)
    private $fournisseur; // Nom du fournisseur
    private $dateConservation; // Date de conservation
    private $nom; // Nom du produit

    // Constructeur : Initialise les propriétés
    public function __construct(
        $nom,
        $prix,
        $poids,
        $origine,
        $labelEco,
        $fournisseur,
        $dateConservation,
        $dateDePeche = null // Optionnel
    ) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->poids = $poids;
        $this->origine = $origine;
        $this->labelEco = $labelEco;
        $this->fournisseur = $fournisseur;
        $this->dateConservation = new DateTime($dateConservation);
        $this->dateDePeche = $dateDePeche ? new DateTime($dateDePeche) : null;
    }

    // Getters et setters pour les propriétés privées
    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getDateDePeche() {
        return $this->dateDePeche ? $this->dateDePeche->format('Y-m-d') : "Non applicable";
    }

    public function getOrigine() {
        return $this->origine;
    }

    public function getLabelEco() {
        return $this->labelEco ? "Oui" : "Non";
    }

    public function getFournisseur() {
        return $this->fournisseur;
    }

    public function getDateConservation() {
        return $this->dateConservation->format('Y-m-d');
    }

    // Méthode : Affiche les détails du produit
    public function afficherDetails() {
        echo "Nom : " . $this->getNom() . "<br>";
        echo "Prix : " . $this->getPrix() . " €<br>";
        echo "Poids : " . $this->getPoids() . " kg<br>";
        echo "Date de pêche : " . $this->getDateDePeche() . "<br>";
        echo "Origine : " . $this->getOrigine() . "<br>";
        echo "Éco-responsable : " . $this->getLabelEco() . "<br>";
        echo "Fournisseur : " . $this->getFournisseur() . "<br>";
        echo "Date de conservation : " . $this->getDateConservation() . "<br>";
    }
}
?>
