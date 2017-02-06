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

  public function __construct()
  {
    $this->id = -1;
    $this->adress = '';
    $this->name = '';
    $this->surname = '';
    $this->credits= null;
    $this->hashedPassword='';
  }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of Adress
     *
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of Adress
     *
     * @param mixed adress
     *
     * @return self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return true;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return true;
    }

    /**
     * Get the value of Surname
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of Surname
     *
     * @param mixed surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return true;
    }

    /**
     * Get the value of Credits
     *
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set the value of Credits
     *
     * @param mixed credits
     *
     * @return self
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return true;
    }

    /**
     * Get the value of Hashed Password
     *
     * @return mixed
     */
    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * Set the value of Hashed Password
     *
     * @param mixed hashedPassword
     *
     * @return self
     */
    public function setHashedPassword($hashedPassword)
    {
        $this->hashedPassword = $hashedPassword;

        return true;
    }

}

$user1 = new User();
var_dump($user1);
$user2 = new User;
$user2->setName('marcin');
var_dump($user2);

 ?>
