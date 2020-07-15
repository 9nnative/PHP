<?php

class Casting {
    private $role;
    private $acteur;
    private $film;
    private $rolesowned;


    public function __construct(Role $role,Acteur $acteur,Film $film)
    {
        $this->role = $role;
        $this->acteur = $acteur;
        $this->film = $film;
        $this->rolesowned = [];
        $role->addRoleParActeur($this);
        $acteur->addFilmsOwned($this);
        $film->addFilmsParGenre($this);
    }

    public function addRolesParActeur(Casting $c){
        $this->rolesowned[] = $role;
    }
    
    public function totalRolesParActeur(){
     
        foreach($this->rolesowned as $role){
            echo "<br>Rôle joué : ".$role->getNomRole();
        }
    
    }


    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of acteur
     */ 
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set the value of acteur
     *
     * @return  self
     */ 
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

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