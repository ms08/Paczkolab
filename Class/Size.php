<?php

class Size
{
  private $id;
  private $size;
  private $credits;

  public function __construct()
  {
    $this->id = -1;
    $this->size = '';
    $this->credits= null;
  }

    public function getId()
    {
        return $this->id;
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

    public function getCredits()
    {
        return $this->credits;
    }

    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }
}



 ?>
