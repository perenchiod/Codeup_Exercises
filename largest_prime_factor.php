<?php 
	$magicNumber = 600851475143;
	$wholeArray = [];
	$comapre = 100000;
	
	for($i = 1; $i <= $comapre; $i++) 
	{
		$wholeNum = is_int($magicNumber / $i);
		if($wholeNum) 
		{
			array_push($wholeArray, $i);
		}
	}
	var_dump($wholeArray);
	
	

	// function checkPrime ($array1) 
	// {
	// 	foreach ($array1 as $key => $value) 
	// 	{
	// 		// $primeNums = gmp_nextprime($array1[$key] - 1);
	// 		// var_dump($primeNums);
	// 	}
	// }

	// checkPrime($wholeArray);
	




?>