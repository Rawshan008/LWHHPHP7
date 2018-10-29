<?php 

$number1 = array(1,4,2,6,8,9,4);
$number2 = array(1,4,5,6,8,10,5);

$numIntersept = array_intersect($number1, $number2);
print_r($numIntersept); // show common array by value.
$numIntersept = array_intersect_assoc($number1, $number2);
print_r($numIntersept); // show comon array by value and index. 

$differ1 = array_diff($number1, $number2);
print_r($differ1); // j array gula milbe na take show korabe, but ata sudu array value dia search kore, not array index.
$differ = array_diff_assoc($number1, $number2);
print_r($differ);// j array gula milbe na take show korabe, but ata sudu array value dia search kore with array index.

