<?php
// class reprezent one user

class User
{
  private $id;
  private $adress;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;
  static public $connection;

  public function __construct()
  {
    $this->id = -1;
    $this->adress = '';
    $this->name = '';
    $this->surname = '';
    $this->credits= null;
    $this->hashedPassword='';
  }

    public function getId()
    {
        return $this->id;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;

        return true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return true;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return true;
    }

    public function getCredits()
    {
        return $this->credits;
    }

    public function setCredits($credits)
    {
        $this->credits = $credits;

        return true;
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function setHashedPassword($password)
    {
        $hashedPassword=password_hash($password, PASSWORD_BCRYPT);
        $this->password = $hashedPassword;

        return true;
    }


}
//todo tests get and set function


 ?>
