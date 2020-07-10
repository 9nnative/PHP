<?php 

// Film :
// • titre film
// • année de sortie en France
// • durée (en minutes)
// • synopsis
// • réalisateur (UN SEUL réalisateur par film)
// Réalisateur :
// • nom
// • prenom
// • date de naissance
// Acteur :
// • nom
// • prenom
// • date de naissance
// Rôle :
// • nom du rôle
// Genre :
// • nom du genre


// On doit pouvoir afficher :
// • tous les films d'un réalisateur
// • tous les films d'un acteur (film + nom du rôle)
// • tous les films d'un genre précis
// • la liste des rôles d'un acteur (nom du rôle et titre du film)
// • toutes les informations d'un film (titre, année, durée en HH:MM, genre, liste des acteurs (nom + prénom), réalisateur (nom + prénom))
// • la liste des acteurs ayant incarné un rôle précis (nom + prénom de l'acteur et film dans lequel le rôle a été incarné)


spl_autoload_register(function ($class_name) {
    include "class/". $class_name . '.php';
});

$g1 = New Genre("Guerre");
$g2 = New Genre("Action");
$g3 = New Genre("Aventure");

$r1 = new Real("Snyder","Zac","01-03-1966");
$r2 = new Real("Owen","Morty","23-01-1964");
$r3 = new Real("Jesus","Marie","21-02-1947");
$r4 = new Real("Steegh","Paul","05-09-1978");

$a1 = new Acteur("Steeg111h","Paul","05-09-1270");
$a2 = new Acteur("Steegh","Paulp","05-09-1978");
$a3 = new Acteur("Steegeeeeh","Pausdfl","15-09-1971");
$a4 = new Acteur("Steexgh","Paul","05-09-1878");


$f1 = new Film("300", "2006", 117, "En 485 avant notre ère, Xerxès succède à Darius Ier sur le trône de l'empire perse. Rapidement, les grandes cités grecques comprennent qu'une nouvelle guerre s'annonce. Athènes, Thèbes, Corinthe et Délos se rallient à Sparte qui dispose de la meilleure armée. En 480, le roi spartiate Léonidas est nommé commandant en chef de cette union militaire de la dernière chance. Lorsque la flotte perse rallie les fantassins de Xerxès, les troupes grecques prennent peur.", $r1 , $g1, $a1);
$f2 = new Film("Man of Steel", "2013", 148, "Un petit garçon découvre qu'il possède des pouvoirs surnaturels et qu'il n'est pas né sur Terre. Plus tard, il s'engage dans un périple afin de comprendre d'où il vient et pourquoi il a été envoyé sur notre planète mais il devra devenir un héros s'il veut sauver le monde de la destruction totale et incarner l'espoir pour toute l'humanité.", $r1, $g2, $a1);
$f3 = new Film("Winnie da bear", "2002", 121, "Ce genre d'ourson!", $r2, $g2, $a4);
$f4 = new Film("Avatar","2013",210, "Des Shtroumpfs bleus ??? naaaan", $r4, $g3, $a4);


// pour tous les films qui contiennent X réalisateur, afficher : films   
// var_dump($r1);

echo "Le réalisateur <strong>".$r1."</strong> a écrit les films suivants :<br>"; 
$r1->totalFilmsOwned();
echo "<br>L'acteur <strong>".$a4."</strong> a joué les films suivants :<br>"; 
$a4->totalFilmsOwnedbyActeur();


