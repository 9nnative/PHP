<?php 
/* Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme : 
    
    Affichage (pour la table de 8) :
    Table de 8 :
    1 x 8 = 8
    2 x 8 = 16
    3 x 8 = 24 …*/

$table = 8;

        Echo "Table de ".$table."<br>";

        for ($multi = 1; $multi <= 10; $multi++) {
            echo $table.' x '.$multi.' = '.$table*$multi.'<br>';
        }



    ?>

