<?php

    


    class Films{

        private $titre;
        private $datedesortie;
        private $duree;


    

    public  function __construct($titre, $datedesortie, $duree) { 
        $this->titre = $titre;
        $this->datedesortie = new DateTime($datedesortie);
        $this->duree = $duree;      


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


    public function getDatedesortie()
    {
        return $this->datedesortie->format("d/m/Y");
    }

    public function setDatedesortie($datedesortie)
    {
        $this->datedesortie = $datedesortie;

        return $this;
    }

    public function getDuree()
    {
        return strftime( "%H H %M mn", $this->duree * 60 );
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }



    public function __toString() {
        return "Le film ".$this->titre.", sorti le ".$this->getDatedesortie()." dure ".$this->getDuree().". Ce film de type ";
    }
}