<?php
	require_once 'rectangle.php';
	
	class Square extends Rectangle
	{
		public $side;

		public function __construct($side)
		{
			$this->side = $side;
		}

		public function perimeter ()
		{
			return $this->side * 4;
		}
	}



?>