<?php

 $a = 5;
 $b = 10;
 $c = '10';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is greater than $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than of equal to $c\n";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than of equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is value equal to $c\n";
 }

 if ($b === $c) {
     // output the appropriate result
     echo "$b is value and type equal to $c\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }

 ?>