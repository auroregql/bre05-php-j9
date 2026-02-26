<?php

class User
{
    
    private $id = null;       
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->email     = $email;
    }

    
    public function getId()
    {
        return $this->id;
    }
    
     public function setId($id)
    {
        $this->id = $id;
    }
    
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
     public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

?>