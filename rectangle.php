<?php
	class Rectangle
	{
		public $width;
		public $height;

		public function __construct($width, $height = 0)
		{
			$this->width = $width;
			$this->height = $height;
		}

		public function area()
		{
			return $this->width * $this->height;
		}
	}

?>