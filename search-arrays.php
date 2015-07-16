<?php

	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


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

