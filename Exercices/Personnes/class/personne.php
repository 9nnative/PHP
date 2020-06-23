<?php

class Personne {

    //Attributs de classe (Variables d'instance)
    private $nom;
    private $prenom;
    private $ville;

    //Constructeur
    public  function __construct($nom, $prenom, $ville) { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;      //permet de cibler les attributs de la classe

    } 

    //méthodes : getters (accesseurs) et setters (mutateurs)

    //getters

    public function getNom() {

        return $this->nom;  
    }
    public function getPrenom() {

        return $this->prenom;  
    }
    public function getVille() {

        return $this->ville;  
    }



    //setters

    public function setNom($nom) {
        $this ->nom = $nom;

    }
    public function setPrenom($prenom) {
        $this ->prenom = $prenom;
        
    }
    public function setville($ville) {
        $this ->ville = $ville;
        
    }

    public function __tostring() {
        return $this->nom." ".$this->prenom." habite ".$this->ville;

    }
}

