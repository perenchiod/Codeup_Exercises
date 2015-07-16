<?php

	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

	function combineArrays ($array1 , $array2) {
		$combinedArray = [];
		foreach ($array1 as $key => $value) {
			if($array1[$key] === $array2[$key]) {
				array_push($combinedArray, $array1[$key]);
			} else {
				array_push($combinedArray, $array1[$key]);
				array_push($combinedArray, $array2[$key]);
			}
		 	
		}
		return $combinedArray;
	}


	function boolArray ($var1 , $array1) {
		if(array_search("$var1" , $array1)){
			return true;
		} else {
			return false;
		}
	}

	function compareArrays ($array1 , $array2) {
		$count = 0;
		$matches = 0;
		foreach ($array1 as $value) {
			if($value == $array2[$count]) {
				$matches++;
			} 	
			$count++;
		}
		return $matches;
	}


	var_dump (boolArray("Mike" , $names));
	echo compareArrays($names, $compare) . " matches in array found." . PHP_EOL;
	print_r(combineArrays($names , $compare)) . PHP_EOL;

