<?php
// class reprezent one user

class User
{
  private $id;
  private $adressId;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;
  static public $connection;

  public function __construct()
  {
    $this->id = -1;
    $this->adressId = null;
    $this->name = '';
    $this->surname = '';
    $this->credits= null;
    $this->hashedPassword='';
  }

    public function getId()
    {
        return $this->id;
    }

    public function getAdressId()
    {
        return $this->adressIs;
    }

    public function setAdressId($adressId)
    {
        $this->adress = $adressId;

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
//funkcja ktora wybiera jedna komorke

    public function loadFromDB($idUser)
    {
      $sql = 'SELECT * FROM users WHERE id= $idUser';

      if($result = Self::$connection->query(sql))
      {
        $row=$result->fetch_assoc();

        $this->id = $row['id'];
        $this->name=$row['name'];
        $this->surname=$row['surname'];
        $this->credits=$row['credits'];
        $this->hashedPassword=$row['hashedPassword'];
        $this->adressId=$row['adress_id'];

        echo "asdsdssaddas";
        return $row;

        //jest row a nie true poniewaz ze wzgledu na uzycie widoku, w razie czego to i tak ma wartość true
      }
      else
      {
        echo "brak";
        return false;
      }
    }
}





 ?>
