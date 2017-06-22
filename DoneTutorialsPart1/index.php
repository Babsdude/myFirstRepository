<?php

$text = 'Two';

function printCrapp($printString)
{
	global $text;
	$result = $text . " awesome, big " . $printString;
	return $result;
}

echo printCrapp('Boobies');

$x = 7;
$y = 14;
$z;

function addThem()
{
	return $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
}

echo '<br>' . addThem();

echo '<br>';

function myTest()
{
	static $x = 0; // static forbids destroy of this variable
	echo $x;
	$x++;
}

myTest();
myTest();
myTest();

echo "<br>";

$int = 'asd';
var_dump($int);

echo "<br>";

$tanks = array('Tiger', 'Royal Tiger', 'Panther', 'Panzer IV');


foreach($tanks as $tank)
	echo $tank . "<br>";


class Car
{
	public function Car(){
		$this->model = "Volvo";
		$this->color = "Blue";
		$this->engine = (float)2.0;
	}
}

$CarVolvo = new Car();

echo $CarVolvo->color;

echo "<br>";

$x = "Hello php";
$x = NULL;
var_dump($x);

echo "<br>";

echo strlen("Hello PHP!");
echo str_word_count("Hello PHP!"); // outputs 2

echo "<br>";

echo strrev("Hello PHP!"); 

echo "<br>";

echo str_replace("word", "boobs", "hello php!");
echo "<br>";

DEFINE("HELLO", "This is what define does<br>");

function hello()
{
	echo HELLO; // define makes vars global
}
hello();

// you can kinda concat arrays

$i = [
	"a" => "red",
	"b" => "blue"
];
$j = [
	"c" => "green",
	"d" => "yellow"
];
print_r ($i + $j);


$testInt = 2;

function testInt()
{
	global $testInt;
	$testInt += 2;
}


testInt();

echo $testInt;
echo '<br>';

$time = date('H');


echo $time;

echo '<br>';
switch($time)
{
	case ($time >=0 && $time <=10):
		echo "0-10";
		break;
	case ($time >=11 && $time <=18):
		echo "10-19";
		break;
	case ($time >=19 && $time <=24):
		echo "20-24";
		break;
	default:
		echo "I don't know that time it is. The var time is -->>" . $time;
}

echo "<br>";
echo "<br>";

function defaultArgs($int = 5)
{
	return $int + 5;
}

echo defaultArgs('4');
echo "<br>";
echo defaultArgs();
echo "<br>";
echo defaultArgs('6');
echo "<br>";
echo "<br>";

$actrecess = array('Audrey Bitoni', 'Jewels Jade', 'Lisa Ann');

echo count($actrecess);

echo "<br><br>";
$arrlength = count($actrecess);
for($i = 0; $i < $arrlength; $i++)
{
	echo $actrecess[$i] . '<br>';
}
echo "<br><br>";

$a = 1;
$b = 2;
$c = 3;
function notFull($a,$b,$c)
{
	return $a + $b;
}

echo notFull($a,$b,$c);
echo '<br><br>';

$pornstars = array(
	'9'  => 'Audrey Bitoni' ,
	'10' => 'Jewels Jade',
	'8' => 'Lisa Ann'
);

ksort($pornstars); // asoert(), arsort();

foreach ($pornstars as $awesomeness => $pornstar)
{
	echo $pornstar . ' is a ' . $awesomeness . '<br>';
}

echo "<br><br>";



/* foreach($_SERVER as $serv => $servData)
	echo $serv . ' ' . $servData . '<br>'; */

echo $_SERVER['GATEWAY_INTERFACE'];

?>