<?php
	
	echo "Enter a strating number for your loop: ";
	$start = fgets(STDIN);
	echo "Enter a ending number for your loop: ";
	$end = fgets(STDIN);
	echo "Now enter a number to have for a interval: ";
	$inc = fgets(STDIN);
	for($start; $start <= $end;$start += $inc) {
		usleep(200000);
		echo "$start";
		echo PHP_EOL;
	}

	//Fizz Buzz section
	for($i = 1; $i < 100; $i++) {
		usleep(123456);
		if(($i % 3 == 0) && ($i % 5 == 0)) {
			echo "FizzBuzz" . PHP_EOL;
		} 
		else if($i % 3 == 0) {
			echo "Fizz" . PHP_EOL;
		}
		else if($i % 5 == 0) {
			echo "Buzz" . PHP_EOL;
		}
		echo "$i" . PHP_EOL;
	}

?>