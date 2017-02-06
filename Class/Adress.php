<?php

class Address
{
  private $id;
  private $city;
  private $zipCode;
  private $street;
  private $apartmentNumber;

  public function __construct()
  {
    $this->id = -1;
    $this->city = '';
    $this->zipCode = '';
    $this->street = '';
    $this->apartmentNumber= '';
  }

    public function getId()
    {
        return $this->id;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    public function setApartmentNumber($apartmentNumber)
    {
        $this->apartmentNumber = $apartmentNumber;

        return $this;
    }
}


?>
