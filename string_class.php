<?php

//We can get the size of a string

$name = " ";

echo $name;
echo "<br/>";
echo "Number of characters before trim: ";

echo strlen /* It returns the length of the string */ ($name);
echo "<br/>";
echo "After trim " . strlen(trim($name));
exit;
echo "number of words <br/>";
echo str_word_count /* Returns the number of words */ ($name);
//0752635350
echo "<br/>";
echo "<b>$name</b> reversed <b>" . strrev($name) . "</b>";

$statement = "I am going to school";
// [I,,a,m,,g]

echo "<br/>";
echo strpos($statement, "going");

echo "<br/>";
echo $statement . " => " . str_replace("school", "market", $statement);

$string2 = "ashan";
echo lcfirst($string2);

//https://www.w3schools.com/php/php_ref_string.asp