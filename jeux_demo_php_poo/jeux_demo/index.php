<?php

    // On teste ici la création d'objets, l'utilisation de leurs propriétés et classes

    require("./JeuVideo.php");

    $jeuNumero1 = new JeuVideo("Call of Duty : Black Ops II");

    $jeuNumero1->afficherListePlateformes();
    $jeuNumero1->ajouterPlateformeAutorisees("PC");
    $jeuNumero1->afficherListePlateformes();

    $jeuNumero1->definirPlateforme("PC");
    

?>