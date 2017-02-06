<?php

class Parcel
{
  private $id;
  private $user;
  private $size;

  public function __construct()
  {
    $this->id = -1;
    $this->user = '';
    $this->size = '';
  }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}


 ?>
