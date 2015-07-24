<?php

	require_once 'Log.php';

	$log = new Log("log");
	$log->logMessage("Log message testing testing" . PHP_EOL);
	$log->logInfo();
	$log->logError();
	unset($log);


?>