<?php 
    ob_start(); 
    $detailGenre = $genre->fetch();
?>

<h2>Editer le genre</h2>

<form action="index.php?action=editGenreOK&id=<?= $detailGenre["id_genre"] ?>" method="POST">
    <label for="nom_genre">Nom du genre</label>
    <input 
        class="uk-input" 
        type="text" 
        name="nom_genre" 
        id="nom_genre" 
        value=<?= $detailGenre["nom_genre"] ?>
    >
    <input class="uk-button uk-margin-top" type="submit" value="Modifier">
</form>

<?php

$titre = "Ajouter un genre";
$contenu = ob_get_clean();
require "views/template.php";