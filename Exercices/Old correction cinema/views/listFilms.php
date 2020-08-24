<?php ob_start(); ?>

<h2>Liste des films</h2><br/>


<?php






while($film = $films->fetch()) { 
    $stars = str_repeat("<span class='fa fa-star'></span>", $film["note_film"] );
    $starsnull = str_repeat("<span class='fa fa-star unchecked'></span>", 5 - $film["note_film"] );
    
    ?>
     <a class ="lien" href="index.php?action=detailFilm&id=<?= $film["id_film"] ?>">
        <?= $film["titre_film"] ?>
    </a><?= "(".$film["annee_film"].")     $stars$starsnull <br/><br/>".$film["resume_film"]."<br/><br/><br/>"?>

<?php };

$films->closeCursor();

$titre = "Liste des films";
$contenu = ob_get_clean();
require "template.php";