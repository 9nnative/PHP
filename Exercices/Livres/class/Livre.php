<?php 

class Livre{

    private $titre;
    private $auteur;
    private $nbdepages;
    private $prix;
    private $dateSortie;


    public  function __construct($titre, $auteur, $nbdepages, $prix, $dateSortie) { 
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbdepages = $nbdepages;      //permet de cibler les attributs de la classe
        $this->prix = $prix;
        $this->dateSortie = new DateTime($dateSortie);
    } 


    public function getTitre() {

        return $this->titre;  
    }
    public function getAuteur() {

        return $this->auteur;  
    }
    public function getNbdepages() {

        return $this->nbdepages;  
    }
    public function getPrix() {

        return $this->prix;  
    }
    public function setTitre() {

        return $this->titre;  
    }
    public function setAuteur() {

        return $this->auteur;  
    }
    public function setNbdepages() {
        return $this->nbdepages;  
    }
    
    public function setPrix() {
        return $this->prix;  
    }


    public function getDateSortie()
    {
        return $this->dateSortie->format("d/m/Y");
    }


    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;
        return $this;
    }


    
    public function __toString() {
        return "Le livre ".$this->titre." écrit par ".$this->auteur." possède ".$this->nbdepages." pages et coûte ".$this->prix." euros et est sorti en ".$this->getdateSortie();
    }
}