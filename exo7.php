<?php 

/*Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. 

Affichage : L’enfant qui a 10 ans appartient à la catégorie « Minime » */

$age = 11;

if ($age < 6) {
    echo "Cette catégorie d'âge n'est pas gérée";
} elseif ($age < 7) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Poussin »";
} elseif ($age < 9) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Pupille »";
} elseif ($age < 12) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Minime »";
} elseif ($age > 12 ) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Cadet »";
}


?>