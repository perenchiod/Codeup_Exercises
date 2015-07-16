<?php

// TODO: Create your inspect() function here
	function inspect ($var1) {
		if(is_string($var1)) { 
			if(empty($var1)) {
				return "This is an empty string";
			} else {
				return "This is a string with value $var1";
			}
		} else if (is_integer($var1)) {
			if($var1 == 0) {
				return "This integer is zero";
			} else {
				return "Is a integer with value of $var1";
			}
		} else if (is_double($var1)) {
			return "This float is $var1";
		} else if (is_array($var1)) {
			if($var1 == null) {
				return "Array is empty";
			} else {
				return "Array with contents " . print_r($var1);
			}
		} else if (is_null($var1)) {
			return "value is NULL";
		} else if (is_bool($var1)) {
			if($var1) {
				return "Boolean with value true";
			} else {
				return "Boolean with value false";
			}
		}
	}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value
echo 'Inspecting $num1 type - ' . inspect($num1) . PHP_EOL;
echo 'Inspecting $num2 type - ' . inspect($num2) . PHP_EOL;
echo 'Inspecting $num3 type - ' . inspect($num3) . PHP_EOL;
echo 'Inspecting $num4 type - ' . inspect($num4) . PHP_EOL;
echo 'Inspecting $null type - ' . inspect($null) . PHP_EOL;
echo 'Inspecting $bool type - ' . inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool type - ' . inspect($bool2) . PHP_EOL;
echo 'Inspecting $string type - ' . inspect($string1) . PHP_EOL;
echo 'Inspecting $string type - ' . inspect($string2) . PHP_EOL;
echo 'Inspecting $array type - ' . inspect($array1) . PHP_EOL;
echo 'Inspecting $array type - ' . inspect($array2) . PHP_EOL;
