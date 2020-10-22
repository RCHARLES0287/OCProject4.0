<?php


namespace Entity;


use OCFram\Entity;

class AdminEntity extends Entity
{
    private $login;
    private $password;
    private $status;
    private $creationDate;


    public function __construct(array $donnees = [])
    {
        parent::__construct($donnees);
    }


    public function setLogin($login)
    {
        $this->login = (string)$login;
    }

    public function login()
    {
        return $this->login;
    }


    public function setPassword($password)
    {
        $this->password = (string)$password;
    }

    public function password()
    {
        return $this->password;
    }


    public function setStatus($status)
    {
        $this->status = (string)$status;
    }

    public function status()
    {
        return $this->status;
    }


    public function setCreationDate($creationDate)
    {
        if ($creationDate instanceof \DateTime)
        {
            $this->creationDate = $creationDate;
        }
    }

    public function creationDate()
    {
        return $this->creationDate;
    }
}
