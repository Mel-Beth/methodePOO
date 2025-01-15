<?php

    require("./Product.php");
    require("./Ordinateur.php");

    $prix_produit_1 = 99.99;
    $prix_produi_2 = 109.99;

    $nom_produit1 = "Micronde";
    $nom_produit2 = "TV";

    $monProduit = new Product();

    $monProduit->afficher_nom("bonjour");

    // $monProduit->nom = "Produit vaisselle super top";

    $monProduit->definir_nom("Poire Williams");

    $monProduit->afficher_nom();

    $monProduit->afficher_prix();

    $monProduit->definir_prix("2.99");

    $monProduit->afficher_prix();

    $pcDuFormateur = new Ordinateur("Lenovo");

    $pcDuFormateur->afficher_nom();
    $pcDuFormateur->definir_nom("Lenovo Legion Y540 15-IRH");
    $pcDuFormateur->afficher_nom();

    
    $pcDuFormateur->afficher_quantite_ram();

?>