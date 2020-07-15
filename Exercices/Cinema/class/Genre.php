<?php

// Genre :
// • nom du genre

class Genre {
    private $nomgenre;
    private $films;

                            public function __construct($nomgenre)
                            {
                                $this->nomgenre = $nomgenre;
                                $this->films = [];
                                
                            }

                            public function addFilmsParGenre($film){
                                $this->films[] = $film;
                              
                            }

public function totalFilmsParGenre(){

    foreach($this->films as $film){
        echo "<br>Titre du film : ".$film->getTitrefilm()."<br>Année de sortie : ".$film->getAnneesortie()."<br>";
    }
}
public function __toString()
{
    return $this->getNomgenre()." ";
}

    /**
     * Get the value of nomgenre
     */ 
    public function getNomgenre()
    {
        return $this->nomgenre;
    }

    /**
     * Set the value of nomgenre
     *
     * @return  self
     */ 
    public function setNomgenre($nomgenre)
    {
        $this->nomgenre = $nomgenre;

        return $this;
    }

    /**
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }
}