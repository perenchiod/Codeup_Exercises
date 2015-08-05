<?php 
	
	class Log 
	{
		protected $filename;
		private $handle;

		public function __construct($prefix) 
		{
			$this->setFileName($prefix);
			$this->handle = fopen($this->getFilename(), "a");
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

		protected function setFileName($prefix = "log")
		{
			if(is_string($prefix)){
				$this->filename = "$prefix" . date("y-m-d") . ".log";
			} else {
				die("No good! Prefix is not a string, DIE!");
			}

			if(!is_writable($this->filename) && !touch($this->filename) ) {
				die("Filename can't be written. DIE!");
			}
		}

		protected function getFileName()
		{
			return $this->filename;
		}

		public function __destruct() 
		{
			if(isset($this->handle)) {
				fclose($this->handle);
			}
		}

	
	}


?>