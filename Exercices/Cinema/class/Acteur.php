<?php

// Acteur :
// • nom
// • prenom
// • date de naissance


class Acteur extends Personne{

private $filmsowned;


                public function __construct(string $nom="",string $prenom="",string $datedenaissance=""){
                    parent::__construct($nom, $prenom, $datedenaissance);
                    $this->filmsowned = [];
                    
                    
                }

                
public function addFilmsOwned($film){
    // $this->filmsowned[] = $film;
    array_push($this->filmsowned, $film);
}

public function totalFilmsOwnedbyActeur(){
 

    foreach($this->filmsowned as $film){
        echo "<br>Titre du film : ".$film->getTitrefilm()."<br>Année de sortie : ".$film->getAnneesortie()."<br>";
    }

}
public function __toString()
{
    return $this->getNom()." ".$this->getPrenom();
}
}
        