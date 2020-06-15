
<?php 

// A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.

$phrase = "Notre formation DL commence aujourd'hui";
echo "La phrase $phrase contient ".str_word_count($phrase)." mots";

?>