<?php
require_once 'rectangle.php';
require_once 'square.php';

$Rectangle = new Rectangle(12,14);
echo $Rectangle->area() . PHP_EOL;

$Square = new Square(12);
echo $Square->perimeter() . PHP_EOL;
echo $Square->width;

?>