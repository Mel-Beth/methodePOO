<?php
require_once('Classes/Produits.php');
require_once('Classes/Poissonnerie.php');
require_once('Classes/FruitsDeMer.php');

$saumon = new Poissonnerie("Saumon", 25, 2, "Norvège", false, "Océan Direct", "2025-01-13");
$crevettes = new FruitsDeMer("Crevettes", 15, 1, "France", true, "Non spécifié", "2025-01-20");

echo "<h2>Détails des produits :</h2>";
$saumon->afficherDetails();
echo "<br>";
$crevettes->afficherDetails();
?>
