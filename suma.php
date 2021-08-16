<?php
	//single line comments
	
	/*
	This is a multi line comments
	
	*/
	
	$a  = 60; //Lets store the age of the user. We assign initial value
	static $variable  = 234;
	$_variable = 34;
	$_5696969 = 495;
	
	$host_name = 69669;
	$name = "Strings";
	$name_3 = 'Strings';
	$b = 8.7;
	$true = true;
	$false = false;
	$array = array(1, 2, , 5, 6, 6);
	$array_2 = [];
	
	class A {
		public $a;
		function __construct() {
			$this->a = 4;
		}
	}
	
	/*
	camel style
	*/
	$A = 5;
	$a = 6;
	//substr_compare();
	
	function get_names() {
		static $counter = 0;
		$counter = $counter + 1;
		return $counter;
	}
	$i = 0;
	for (; $i <= 2; $i++)
		print ("<p>When i = $i =>" . get_names() . "</p>");
	
	//Strings are characters with that are with quotes //SIngle quotes or double quotes
	$string = "String55858585858";
	$string_2 = 'string7777yyyyy';
	
?>
