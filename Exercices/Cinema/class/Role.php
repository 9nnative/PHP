<?php 

// Rôle :
// • nom du rôle

class Role {

    private $nomrole;

                public function __construct ($nomrole){
                    $this->nomrole = $nomrole;
                }

    /**
     * Get the value of nomrole
     */ 
    public function getNomrole()
    {
        return $this->nomrole;
    }

    /**
     * Set the value of nomrole
     *
     * @return  self
     */ 
    public function setNomrole($nomrole)
    {
        $this->nomrole = $nomrole;

        return $this;
    }
}