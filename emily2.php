<?php

$name = "am tumusiime ashiraff from kampala uganda. i stay in buziga. i love singing alot.";

/*
$number_characters_in_name = strlen($name); //strlen(); string length

echo "Character count : " . $number_characters_in_name;

$number_of_words_in_name = str_word_count($name);

echo "<br/>";

echo "Word count : " . $number_of_words_in_name;

echo "<br/>";
*/

//echo "Position of <b>love</b> in <b>$name</b> is : " . strpos /* String position */ ($name, "love");

//echo "<br/>";

//echo "Replacing Ashiraff with emilly <b>" . str_replace("Ashiraff", "Emilly", $name) . "</b>"; 

//echo "<br/>";

/*$about_emily = "Emilly is a Muganda Lady from Makindye.
She is a student from Makerere University
She loves coding";

echo nl2br($about_emily); //new line to break = nl2br

echo "<br/>";
*/
$name_2 = "emilly";
$name_3 = "EMILLY";
//Makes first letter small
echo $name_3 . " => " . lcfirst($name_3); //lower case first

echo "<br/>";
echo $name_2 . " => " . ucfirst($name_2); //Upper case first

echo "<br/>";
echo $name_2 . " => " . strtoupper($name_2); //String to upper
echo "<br/>";
echo $name_3 . " => " . strtolower($name_3); //String to lower
echo "<br/>";
echo $name;
echo "<br/>";
echo ucwords($name);