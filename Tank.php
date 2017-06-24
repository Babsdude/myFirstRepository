<?php

class Tank
{

  private $tankname;

  public function __construct()
  {
    echo 'Tank class constructed' . '<br>';
  }
  public function setTankName($tName)
  {
    $this->tankname = $tName;
  }
  public function getTankName()
  {
    return $this->tankname;
  }
}

?>
