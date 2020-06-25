<?php

// Un compte bancaire est identifié par : -un libellé (« compte courant », « livret A », ...) -un solde initial -une devise monétaire -un titulaire unique
//plusieurs comptes banquaires pour un titulaire

class Comptebanquaire{

    private $libelle;
    private $soldeini;
    private $devise;
    private $titulaire;

//CREDITER/DEBITER

    public  function __construct($libelle="", $soldeini="", $devise="", $titulaire) { 
        $this->libelle = $libelle;
        $this->soldeini = $soldeini;
        $this->devise = $devise;      //permet de cibler les attributs de la classe
        $this->titulaire = $titulaire;
        $titulaire->addCompte($this);
    } 


    public function getLibelle()
    {
        return $this->libelle;
    }
 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSoldeini()
    {
        return $this->soldeini;
    }

 
    public function setSoldeini($soldeini)
    {
        $this->soldeini = $soldeini;
        


        return $this;
    }

    public function crediter($somme){
        $this->soldeini += $somme;
            
    }

    public function debiter($somme){
        $this->soldeini -= $somme;
            
    }
    public function Virement($somme, $compte){
        $compte->debiter($somme);
        $this->crediter($somme);
            
    }

    public function getDevise()
    {
        return $this->devise;
    }

 
    public function setDevise($devise)
    {
        $this->devise = $devise;
        
        return $this;
    }

 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }
}