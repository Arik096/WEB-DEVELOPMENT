<?php
$a = 40;
// is_int check if  a number is int or not
var_dump(is_int($a));

echo "<br>";

$b = 40.40;
var_dump(is_int($b));

echo "<br>";

// is_float checks if a number is float or not
var_dump(is_float($b));

echo "<br>";

$c=acos(8);
var_dump($c);
echo "<br>";

$x = 5985;
// is_numeric cheks if a number is numeric or not
var_dump(is_numeric($x));
echo $x;
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo $x;
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo $x;
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo $x;
echo "<br>";

// type casting
// (int) is the int type caster

$x= 234.345;
$x_cast=(int)$x;
echo $x_cast;

echo "<br>";

$x= "234.345";
$x_cast=(int)$x;
echo $x_cast;

 ?>
