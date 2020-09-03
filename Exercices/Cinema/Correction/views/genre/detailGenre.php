<?php ob_start(); ?>

<h2><?= "aaa" ?></h2>

<?php

$titre = "Détail d'un genre";
$contenu = ob_get_clean();
require "views/template.php";