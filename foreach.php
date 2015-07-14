<?php 

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach($things as $properties) {
		if(is_array($properties)) {
			foreach ($properties as $prop) {
				echo $prop;	
			}
			echo PHP_EOL;
		} else {
			echo $properties .PHP_EOL;
		}
	}



?>