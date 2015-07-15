<?php

	$total = 0;
	$incArray = [];
	for($i = 1; $i < 4000000; $i) {
		$sizeOfArray = sizeof($incArray)-1;
		echo "$i" . PHP_EOL;
		array_push($incArray, $i);
		$i = end($incArray) + $incArray[$sizeOfArray];
		if($i % 2 == 0)
		{
			$total += $i;
		}
	}
	echo "$total";

?>