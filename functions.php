<?php

function add($no_1 = 100, $no_2 = 0) {
	$sum = $no_1 + $no_2;
	return $sum;
}

function marks($no) {
	$no = 80;
	return $no;
}
$mark = 70;


$set = [];
$names = ['Ashan', "Tumusiime", "Sumaya", 888];
$age = array(80, 67, 58);


$marks["math"] = 56;
$marks["sst"] = 34;

$student_marks = array("math" => 56, "sst" => 70);
print_r($student_marks);
//echo $mark;