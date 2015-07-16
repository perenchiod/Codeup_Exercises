<?php 

	$value1 = 100;
	$value2 = 100;
	$highest5Digit = [];
	$highest6Digit = [];

	do
	{
		$magicNum = $value1 * $value2;
		//If my magic number value had 5 digit do this
		if(strlen($magicNum) == 5) 
		{
			$first2 = substr($magicNum, 0 , 2);
			$last2 = substr($magicNum, 3, 4);
			$last2 = strrev($last2);
			if($first2 == $last2) 
			{
				array_push($highest5Digit, $first2 , $last2);
				echo "$magicNum" . PHP_EOL;
				if(($first2 && $last2) > ($highest5Digit[0] && $highest5Digit[1])) 
				{
					$highest5Digit = array_push($highest5Digit, $first2 , $last2);
					var_dump($highest5Digit);
				}
			}
		}
		
		//If my magic number had 6 digits do this instead
		else if (strlen($magicNum) == 6) 
		{
			$first3 = substr($magicNum, 0 , 3);
			$last3 = substr($magicNum, 3, 6);
			$last3 = strrev($last3);
			if($first3 == $last3) 
			{
				if(($first3 && $last3) > ($highest6Digit[0] && $highest6Digit[1])) 
				{
					$highest6Digit = array_push($highest6Digit, $first3 , $last3);
					var_dump($highest6Digit);	
				}
			}
		} 
		else {
			echo "Unknown" . PHP_EOL;
		}

		$value1++;
		if($value1 == 999) 
		{
			$value1 = 100;
			$value2++;
		}
	}while($value2 < 1000);

?>