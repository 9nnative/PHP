<?php

//Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2) Affichage :
//Prix unitaire de l’article : 9.99 €
//Quantité : 5
//Taux de TVA : 0.2
//Le montant de la facture à régler est de : 59.94 €

$prixunitaire = 9.99;
$quantite = 5;
$TVA = 0.2;

$total = $quantite * $prixunitaire * ($TVA +1) ;

$prixhorstaxe = $quantite*$prixunitaire;

echo "Prix unitaire de l'article : $prixunitaire €"."<br>";
echo "Quantité : $quantite"."<br>";
echo "Taux de TVA : $TVA"."<br>";
echo "Montant de la facture, TVA comprise : $total €"."<br>";
echo "Montant de la facture, Hors TVA : $prixhorstaxe €";

?>

