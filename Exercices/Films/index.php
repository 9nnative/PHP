<?php

    //Film : Titre, Date de sortie, Durée (min), Synopsis, Genre. 
    //(deuxieme classe) : Genre, nom du genre


    // affichage : "Le [film] sorti le [date] dure [HH:MM] et appartient au genre [Genre].


    // clean dossiers

    include 'class/Films.php';
    include 'class/Genres.php';
    include 'class/Rea.php';

    $sf= new Genres("Science fiction");
    $ac= new Genres("Action");
    $realisateur= new Rea("Peter Jackson","31-10-1961");

    $f1 = new Films("Seigneur des Anneaux", "14-09-2001",220);
    $f2 = new Films("300","05-08-2006",145);
    
    
    echo $f1.$sf.$realisateur;
    echo $f2.$ac.$realisateur;

?>


