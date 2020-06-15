<?php 

//Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
//Attention, la valeur générée devra être arrondie à 2 décimales. Affichage :
//Montant en francs : 100
//100 francs = 15.24 €

$francs = 100;
$euros = $francs/6.49;
$euros = (round($euros, 2));

echo "Montant en francs : $francs"."<br>";
echo "$francs francs = $euros €";