<?php
require_once 'rectangle.php';
require_once 'square.php';

echo "Rectangle" . PHP_EOL;
$Rectangle = new Rectangle(12,14);
echo "Perimeter: " . $Rectangle->perimeter() . " Area: " . $Rectangle->area() . PHP_EOL;

echo "Square" . PHP_EOL;
$Square = new Square(12);
echo "perimeter: " . $Square->perimeter() . " Area: " . $Square->area() . PHP_EOL;

?>