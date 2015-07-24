<?php 
	
	class Log 
	{
		public $filename;
		public $handle;

		public function __construct($prefix = "log") 
		{
			$this->filename = "$prefix" . date("y-m-d") . ".log";
			$this->handle = fopen($this->filename, "a");
		} 

		public function logMessage($message) 
		{
			fseek($this->handle, 0);
			$date = date("m-d-y H:i:s");
			fwrite($this->handle, PHP_EOL . $date. "\t" . $message); 
		}

		public function logInfo()
		{
			$message = "Logging was a success";
			$this->logMessage($message);
		}

		public function logError() 
		{
			$message = "Logging had an error!";
			$this->logMessage($message);
		}
		public function __destruct() 
		{
			fclose($this->handle);
		}
	
	}


?>