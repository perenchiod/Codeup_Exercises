<?php

	$filename = "contacts.txt";

function formatNumber ($number) {	
	return substr($number, 0 , 3) . "-" . substr($number, 4 , 3) . "-" . substr($number, -4) . PHP_EOL;
}

function parseContacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, "r");
    $contents = trim(fread($handle, filesize($filename)));
    $contactsArray =  explode("\n", $contents);

    foreach ($contactsArray as $key => $value){
    	$newArray = explode("|", $value);
    	$contacts[] = array(
    		"name" => $newArray[0],
    		"number" => formatNumber($newArray[1]),
    	);
    }

    fclose($handle);
    return $contacts;
}

var_dump(parseContacts($filename));
