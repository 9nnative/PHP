<?php

// Film :
// • titre film
// • année de sortie en France
// • durée (en minutes)
// • synopsis
// • réalisateur (UN SEUL réalisateur par film)

class Film {
    private $titrefilm;
    private $anneesortie;
    private $duree;
    private $synopsis;
    private $realisateur;
    private $genre;
    private $acteur;
                    public function __construct(string $titrefilm, string $anneesortie, int $duree,string $synopsis, Real $realisateur, Genre $genre, Acteur $acteur)
                    {
                            $this->titrefilm = $titrefilm; 
                            $this->anneesortie = $anneesortie;
                            $this->duree = $duree;
                            $this->synopsis = $synopsis;
                            $this->realisateur= $realisateur;
                            $realisateur->addFilmsOwned($this);
                            $acteur->addFilmsOwned($this);
                            $this->genre= $genre;
                    }

    /**
     * Get the value of titrefilm
     */ 

    
    public function getTitrefilm()
    {
        return $this->titrefilm;
    }

    /**
     * Set the value of titrefilm
     *
     * @return  self
     */ 
    public function setTitrefilm($titrefilm)
    {
        $this->titrefilm = $titrefilm;

        return $this;
    }

    /**
     * Get the value of anneesortie
     */ 
    public function getAnneesortie()
    {
        return $this->anneesortie;
    }

    /**
     * Set the value of anneesortie
     *
     * @return  self
     */ 
    public function setAnneesortie($anneesortie)
    {
        $this->anneesortie = $anneesortie;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of synopsis
     */ 
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @return  self
     */ 
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of realisateur
     */ 
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set the value of realisateur
     *
     * @return  self
     */ 
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

}