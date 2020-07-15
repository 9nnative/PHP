<?php 

class Personne{

    private $nom;
    private $prenom;
    private $datedenaissance;

    public function __construct($nom, $prenom, $datedenaissance){
        $this->nom = $nom;
        $this->prenom = $prenom; 
        $this->datedenaissance = new DateTime($datedenaissance);
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of datedenaissance
     */ 
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set the value of datedenaissance
     *
     * @return  self
     */ 
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissancereal = $datedenaissance;

        return $this;
    }
    public function __toString()
{
    return $this->getNom()." ".$this->getPrenom();
}
   
}