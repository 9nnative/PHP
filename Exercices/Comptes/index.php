<?php 

include 'class/Comptebanquaire.php';
include 'class/Titulaire.php';




$titulaire = new Titulaire("Jean", "Yves", "18-02-1987", "Strasbourg");
$compte = new Comptebanquaire("Livret A", 1600,"€",$titulaire, 23, 0);
$compte2 = new Comptebanquaire("Compte courant", 1514,"€",$titulaire, 12, 0);


var_dump($titulaire);



echo $titulaire;
