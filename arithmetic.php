<?php

	$a = 9;
	$b = 6;

	echo '$a ' . "= $a\t" .'$b ' . "= $b" . PHP_EOL;
	function add($a, $b)
	{
	    echo "addition: " . ($a + $b) . PHP_EOL;
	}

	function subtract($a, $b)
	{
	    echo "subtraction: " . ($a - $b) . PHP_EOL;
	}

	function multiply($a, $b)
	{
	    echo "multiplication: " . ($a * $b) . PHP_EOL;
	}

	function divide($a, $b)
	{
	    echo "division: " . ($a / $b) . PHP_EOL;
	}
	function modulus ($a , $b) 
	{
		echo "modulus: " . ($a % $b) . PHP_EOL;
	}

	add($a,$b);
	subtract($a,$b);
	multiply($a,$b);
	divide($a,$b);
	modulus($a,$b);


?>