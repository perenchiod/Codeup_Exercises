<?php 

	$var = 0;
	$var2 = 2;
	$var3 = 100;
	echo "Loop 1" . PHP_EOL;
	do {
		echo "$var" . PHP_EOL;
		$var += 2;
	}while($var < 100);

	echo "Loop 2" . PHP_EOL;
	do {
		echo "$var2" . PHP_EOL;
		$var2 = $var2 * $var2;
	}while($var2 < 1000000);

	echo "Loop 3" . PHP_EOL;
	do {
		echo "$var3" . PHP_EOL;
		$var3 = $var3 -= 5;
	}while($var3 >= -10);

?>