<?php 

/* A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €. Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € */

$montantapayer = 152;
$montantverse = 200;
$resteapayer = $montantverse - $montantapayer;


echo "Montant à payer : $montantapayer<br>";
echo "Montant versé : $montantverse<br>";
echo "Reste à payer : $resteapayer<br>";
echo "***************************************<br>";

$billetde10 = 0;
$billetde5 = 0;
$piece2 = 0;
$piece1 = 0;

while ($resteapayer > 10) {
   $billetde10++;
   $resteapayer = $resteapayer-10;

}
while ($resteapayer > 5) {
    $billetde5++;
    $resteapayer = $resteapayer-5;
}

while ($resteapayer > 2) {
    $piece2++;
    $resteapayer = $piece2-2;
 
}



echo "Rendu de monnaie :<br>";
echo " $billetde10 billets de 10 € -  $billetde5 billet de 5 € - $piece2 pièce de 2 € - $resteapayer pièce de 1 € ";
