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

?>