<?php
require_once('views/header.php');

echo 'Hello';

echo ' World!';

require_once('views/footer.php');
?>
<div>
  This is second module
</div>
<?php echo 'Hello world, again'; ?>
<!-- This is comment -->
<div>
  This is third module
</div>
<div>
  And this is third module
</div>
<?php

/* require_once('Tank.php');

$Tank = new Tank();

$Tank->setTankName('Panther');

echo $Tank->getTankName(); */

require_once('TankInfo.php');

$TankInfo = new TankInfo();

$TankInfo->wierdFunc();
echo '<br>';
$TankInfo->echoing();

echo '<br>';
require('TankInfoYears.php');

TankInfo::printCrap('5');
echo '<br>';
$TankInfoClass = new TankInfoYears();
$result = TankInfoYears::addNumbers(5,7);
echo $result;
echo '<br>';
?>
