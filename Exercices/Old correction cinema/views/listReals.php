<?php ob_start();?>

<h2>Liste des réalisateurs</h2><br/>

<?php



while($real= $reals->fetch()) { ?>

    <a class ="lien" href="index.php?action=detailReal&id=<?= $real["id_real"] ?>">
        <?= $real["prenom_realisateur"] ?>
    </a><?= "(".$real["nom_realisateur"].")<br/>"?>
    
    
    <?php };


$reals->closeCursor();

$titre = "Liste des réalisateurs";
$contenu = ob_get_clean();
require "template.php";