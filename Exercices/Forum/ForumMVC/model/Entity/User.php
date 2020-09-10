<?php 

namespace Model\Entity;

use App\AbstractEntity;

class User extends AbstractEntity {

    private $id;
    private $name;
    private $password;
    private $email;
    private $date;
    private $role;


public function __construct($data){
parent::hydrate($data, $this);
}

/**
 * Get the value of id
 */ 
public function getId()
{
    return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
    $this->id = $id;

    return $this;
}



/**
 * Get the value of name
 */ 
public function getName()
{
    return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
    $this->name = $name;

    return $this;
}

/**
 * Get the value of password
 */ 
public function getPassword()
{
    return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
    $this->password = $password;

    return $this;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
    return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
    $this->email = $email;

    return $this;
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
 * Get the value of date
 */ 
public function getDate()
{
    return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
    $this->date = $date;

    return $this;
}
}
