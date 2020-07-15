<?php

// Réalisateur :
// • nom
// • prenom
// • date de naissance



class Real extends Personne{

private $filmsowned;

                    public function __construct(string $nom, string $prenom, string $datedenaissance ){
                        parent::__construct($nom, $prenom, $datedenaissance);
                        $this->filmsowned = [];
                    }
                    
        
/**
 * Get the value of filmsowned
 */ 
public function getFilmsowned()
{
return $this->filmsowned;
}

/**
 * Set the value of filmsowned
 *
 * @return  self
 */ 
public function setFilmsowned($filmsowned)
{
$this->filmsowned = $filmsowned;

return $this;
}

public function addFilmsOwned($film){
    // $this->filmsowned[] = $film;
    array_push($this->filmsowned, $film);
}

public function totalFilmsOwned(){
 

    foreach($this->filmsowned as $film){
        echo "<br>Titre du film : ".$film->getTitrefilm()."<br>Année de sortie : ".$film->getAnneesortie()."<br>";
    }

}

}