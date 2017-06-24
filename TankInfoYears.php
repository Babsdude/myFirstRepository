<?php
require_once('Tank.php');
require_once('TankInfo.php');
class TankInfoYears extends TankInfo
{
  public function __construct()
  {
    echo "sub-subclass TankInfoYears constructed";
  }
  public static function addNumbers($a,$b)
  {
    return $a+$b;
  }
}

?>
