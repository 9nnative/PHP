<?php


    class Films{

        private $titre;
        private $datedesortie;
        private $duree;
        private $nomgenre;
        private $synopsys;
    

    public  function __construct($titre, $datedesortie, $duree, $nomgenre, $synopsys) { 
        $this->titre = $titre;
        $this->datedesortie = new DateTime($datedesortie);
        $this->duree = $duree;      
        $this->nomgenre = $nomgenre;
        $this->synopsys = $synopsys;
    } 
 
    public function getTitre()
    {
        return $this->titre;
    }

 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of datedesortie
     */ 
    public function getDatedesortie()
    {
        return $this->datedesortie->format("d/m/Y");
    }

    /**
     * Set the value of datedesortie
     *
     * @return  self
     */ 
    public function setDatedesortie($datedesortie)
    {
        $this->datedesortie = $datedesortie;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return strftime( "%H H %M mn", $this->duree * 60 );
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
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($nomgenre)
    {
        $this->$nomgenre = $nomgenre;

        return $this;
    }

    public function __toString() {
        return "Le film ".$this->titre.", sorti le ".$this->getDatedesortie()." dure ".$this->getDuree().". Ce film de type ".$this->getGenre()." a été réalisé par ".$this->realisateur."<br>";
    }
}