<?php

require('Tank.php');

class TankInfo extends Tank
{
  private static $int;
  private static $popcorn;
  public function __construct()
  {

    echo '<br>' . 'TankInfo class constructed' . '<br>';
  }
  public function wierdFunc($value='1')
  {
    echo $value;
    self::$int = 4;
    $popcorn = self::$int . 'Wooow';
  }

  public function echoing()
  {
    echo self::$int;
  }

  public static function printCrap($crap)
  {
    echo 'You printed this crap: ' . $crap;
  }

}

?>
