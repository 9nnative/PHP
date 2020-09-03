<?php 
    ob_start(); 
    $detailFilm = $film->fetch();
?>

<h2><?=$detailReal."prenom_realisateur"."nom_realisateur"?></h2>

<?php

"detailReal"$ctrlRealisateur->findOneById($_GET['id']);

<table>
  <tr>
    <th>Prénom</th><th>Nom</th>
  </tr>
  <tr>
    <td></td> <td></td>
  </tr>
</table>


$detailReal->closeCursor();

$titre = "Détail d'un réalisateur";
$contenu = ob_get_clean();
require "views/template.php";