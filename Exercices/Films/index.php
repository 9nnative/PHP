<?php

    //Film : Titre, Date de sortie, Durée (min), Synopsis, Genre. 
    //(deuxieme classe) : Genre, nom du genre


    // affichage : "Le [film] sorti le [date] dure [HH:MM] et appartient au genre [Genre].


    // clean dossiers

    include 'class/Films.php';
    include 'class/Genres.php';

    $sf= new Genres("Science fiction");

    $f1 = new Films("Seigneur des Anneaux", "14-09-2001",220,$sf,"");
    $f2 = new Films("300","05-08-2006",145 ,$sf,"");
    
    echo $f1;
    echo $f2;




