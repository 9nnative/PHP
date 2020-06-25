<?php 

// Un titulaire est identifié par : -un nom -un prénom -une date de naissance -une ville -l'ensemble de ses comptes bancaire

class Titulaire{

    private $nom;
    private $prenom;
    private $datenaissance;
    private $ville;
    private $comptes;
  
//array push

    public  function __construct($nom, $prenom, $datenaissance, $ville) { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = new DateTime($datenaissance);      //permet de cibler les attributs de la classe
        $this->ville = $ville;
        $this->comptes = [];


    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

   
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance(){


        return $this->datenaissance;
        
        
    }




    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }
    public function getAge(){

        $now = new DateTime();
        $interval = $this->getDateNaissance()->diff($now);
        return $interval->format('%Y');
        
    }

    public function getVille()
    {
        return $this->ville;
    }



    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;

    }

    public function getCompte()
    {
        return $this->compte;
    }


    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    public function addCompte($compte){
        $this->comptes[] = $compte;

    }

    

    public function __toString(){

        echo "Nom du titulaire : ".$this->nom."<br>"."Prénom : ".$this->prenom."<br>"."âge: ".$this->getAge()." ans"."<br>";

        
        foreach($this->comptes as $compte){
            return "Libellé du compte : ".$compte->getLibelle()."<br>"."Solde initial : ".$compte->getSoldeini().$compte->getDevise()."<br>";
        }
    }
    } 
