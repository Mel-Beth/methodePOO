<?php
class Produit {
    protected $nom;
    protected $prix;
    protected $poids;
    protected $dateDePeche; // Null si non applicable
    protected $origine;
    protected $labelEco; // Oui/Non
    protected $fournisseur;
    protected $dateConservation;

    public function __construct(
        $nom,
        $prix,
        $poids,
        $origine,
        $labelEco,
        $fournisseur,
        $dateConservation,
        $dateDePeche = null
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
