<?php 

include 'class/Comptebanquaire.php';
include 'class/Titulaire.php';




$titulaire = new Titulaire("Jean", "Yves", "18-02-1987", "Strasbourg");
$titulaire1 = new Titulaire("sdfdsf", "Kékké", "18-02-1987", "Strasbourg");
$compte = new Comptebanquaire("Livret A", 1600,"€",$titulaire);
$compte2 = new Comptebanquaire("Compte courant", 1514,"€",$titulaire);


$compte->Crediter(0);
$compte->Debiter(0);

$compte->Virement(70,$compte2);


var_dump($titulaire);



echo $titulaire;
