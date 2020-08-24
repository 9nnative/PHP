<?php

require_once "controllers/FilmController.php";
require_once "controllers/RealController.php";

$ctrlFilm = new FilmController(); 

$ctrlReal = new RealController();

if(isset($_GET['action'])){

    switch($_GET['action']){
        case "listFilms" : $ctrlFilm->findAll(); break;
        case "detailFilm" : $ctrlFilm->findOneById($_GET['id']); break;
        case "listReals" : $ctrlReal->findAll(); break;
    }
}else {
    $ctrlFilm->findAll();
}