<?php

$textedebase = "j'adore le chocolat";


 function convertirMajRouge($textedebase){

   return mb_strtoupper($textedebase);

}

echo "<strong style='color:red;'>".convertirMajRouge($textedebase)."</strong>";


?>