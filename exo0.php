<?php

// Php est un language faiblement typé (à aucun moment on déclare explicitement le type de la variable), contrairement à Java

/*  
Defs: int : entier, float : virgule dans le nombre
string: chaîne de caractère
*/

$chainedecaracteres = "Ma chaîne de caractères"; // string
$prixTTC = 19.99; // float : décimale
$nbPortes = 4;  // integer : entier
$estpresent = false; // true : booléen
$tableau = ["Virgile","Stéphane","Micka"]; //tableau : $tableau = array("ex","ex")
$tableauassociatif = [1 => "Virgile",2 => "Stéphane", 3 => "Micka"];
$adresse = [
    "rue" => "10 rue de la Gare", 
    "cp" => 67000,
    "ville" => "Strasbourg"
];

$nb1 = 10;
$nb2 = 15;

$total = $nb1 + $nb2;

$first = "Je m'appelle";
$second = "Corentin"; 
$phrase = $first." ".$second; // Le point est le symbole de la concénation en PHP
$nbenfant = 1;
$phrase = $phrase." et j'ai ".$nbenfant." enfant";
$phrase = "$phrase. et j'ai $nbenfant enfant";


echo $phrase; // Afficher le contenu de la variable $phrase

// Structures de contrôle : if, for (pour)(début et fin), while (tant que)(peut faire des tours de boucles infinies)


// if, si

if ($total > 30) {

    echo "ok";
    
} else {
    echo "ko";
}

// Pour
$prenoms = ["Michel","Marie","Julie"];
echo $prenoms[0]; // Affichera Michel
echo count($prenoms); // Affichera 3
$longueurtableau = count($prenoms);

for ($i=0; $i < $longueurtableau; $i++) { // $i++ équivaut à écrire $i = $i + 1 (incrémentation)
    echo $prenoms[$i]."<br>";
}

// Tant que

$j = 0;
while ($j < $longueurtableau) {
    echo $prenoms[$j]."<br>";
    $j++;
}

// Pour chaque

foreach ($prenoms as $prenom) {
    echo $prenom."<br>";
}

$prenoms2 = [1 => "Virgile",2 => "Stéphane", 3 => "Micka"];

foreach ($prenoms2 as $id => $prenom) { //foreach($array as $key => $value) $key = clé, $value = valeur
    echo "$id : $prenom";
}