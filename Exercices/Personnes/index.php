<?php

include 'class/personne.php';


// Instaciations d'objets de la classe personne



$p1 = new Personne("GROSDEMANGE", "Corentin", "Strasbourg");
$p2 = new Personne("GIBELLO","Virgile","Strasbourg");

echo $p1->getNom()." ".$p1->getPrenom()." ".$p1->getVille(). "<br>";
echo $p2->getNom()." ".$p2->getPrenom(). "<br>";

$p1->setville("PARIS");
echo $p1->getNom()." ".$p1->getPrenom()." ".$p1->getVille(). "<br>";

echo $p1;
echo $p2;








?>