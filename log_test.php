<?php

	require_once 'Log.php';

	$log = new Log("log");
	$log->logMessage("Log message testing testing" . PHP_EOL);
	$log->logInfo();
	$log->logError();
	unset($log);

	$log2 = new Log(123);
	$log2->logMessage("Log message testing testing" . PHP_EOL);
	$log2->logInfo();
	$log2->logError();
	unset($log2);


?>