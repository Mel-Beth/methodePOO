<?php
require_once('Classes/Produits.php');
require_once('Classes/Poisson.php');
require_once('Classes/FruitsDeMer.php');

// Produits de la catégorie Poisson
$thon = new Poisson("Thon", 30, 3, "Espagne", true, "Pêche Durable SA", "2025-01-12");
$cabillaud = new Poisson("Cabillaud", 20, 1.5, "Norvège", false, "Océan Nordique", "2025-01-14");
$maquereau = new Poisson("Maquereau", 12, 1, "France", true, "Atlantique Bio", "2025-01-15");
$bar = new Poisson("Bar", 40, 2, "Portugal", false, "Pêcheur Atlantique", "2025-01-11");

// Produits de la catégorie Fruits de Mer
$huitres = new FruitsDeMer("Huitres", 8, 0.5, "France", true, "Huitres de Cancale", "2025-01-25");
$coquillesSaintJacques = new FruitsDeMer("Coquilles Saint-Jacques", 18, 0.8, "Bretagne", true, "Pêche Bretagne", "2025-01-22");
$langoustines = new FruitsDeMer("Langoustines", 25, 1, "Écosse", true, "Pêche Durable Écosse", "2025-01-23");
$crabe = new FruitsDeMer("Crabe", 15, 1.5, "États-Unis", false, "Pêche Amérique", "2025-01-20");

// Affichage des produits
echo "<h2>Poisson :</h2>";
$thon->afficherDetails();
echo "<br>";
$cabillaud->afficherDetails();
echo "<br>";
$maquereau->afficherDetails();
echo "<br>";
$bar->afficherDetails();
echo "<br>";

echo "<h2>Fruits de Mer :</h2>";
$huitres->afficherDetails();
echo "<br>";
$coquillesSaintJacques->afficherDetails();
echo "<br>";
$langoustines->afficherDetails();
echo "<br>";
$crabe->afficherDetails();
?>