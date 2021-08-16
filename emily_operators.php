<?php

//Constants

//Arithmetic operators

$no = 56;
$no_2 = 100;

/*
	Addition +
	Subtraction -
	Division /
	Multiplication *
*/

$sum = $no + $no_2;
$difference = $no_2 - $no;
$product = $no * $no_2;
$divided = $no_2 / $no;


//Assignment operators
/*

	= 
*/
$name = "Emilly";

// Comparison operators
/*
	==	Equal	$x == $y	Returns true if $x is equal to $y
	===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type
	!=	Not equal	$x != $y	Returns true if $x is not equal to $y
	<>	Not equal	$x <> $y	Returns true if $x is not equal to $y
	!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
	>	Greater than	$x > $y	Returns true if $x is greater than $y
	<	Less than	$x < $y	Returns true if $x is less than $y
	>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y
	<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y
*/

$x = 15;
$y = 15;
$z = 10;

if ($y == $x) // Equal
	echo "True. Y ($y) is equal to X ($x)";
else
	echo "False Y ($y) is not equal to X ($x)";

echo "<br/>";

if ($y != $z)
	echo "True. Y ($y) is equal not to Z ($z)";
else
	echo "False Y ($y) is equal to Z ($z)";

echo "<br/>";