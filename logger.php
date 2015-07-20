<?php

date_default_timezone_set("America/Mexico_City");
function logMessage($logLevel, $message) {
	$filename = "log-" . date("y-m-d") . ".log";
	$handle = fopen($filename, "a");
	$date = date("m-d-y H:i:s");
	fwrite($handle, PHP_EOL . $date. "\t" . $logLevel . "\t". $message);
	fclose($handle);
	return $message;
}

function logInfo($message){
	logMessage("INFO", $message);
}

function logError($message) {
	logMessage("ERROR", $message);
}
logInfo("The info here is impeccable!");
logError("Error found.");

