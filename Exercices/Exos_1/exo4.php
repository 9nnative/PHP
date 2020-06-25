<?php

//Ecrire un algorithme permettant de savoir si une phrase est palindrome. Affichage :
//La phrase « Engage le jeu que je le gagne » est palindrome 
// virer les espaces, enlever les majuscules, inverser

$phrase = "Engage le jeu que je le gagne";
$palindrome = str_replace(' ','',$phrase); //enlever les espaces
$palindrome = mb_strtolower($palindrome); // virer les majuscules
$palindrome = strrev($palindrome);

if ($palindrome == mb_strtolower(str_replace(' ','',$phrase))) {

    echo "La phrase $phrase est palindrome";

} else {

    echo "La phrase $phrase n'est pas palindrome";

}

?>

