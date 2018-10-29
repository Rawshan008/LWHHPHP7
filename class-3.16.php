<?php 

$number = array(1,2,3,4,5,6,7,8,9,10,11,12);
print_r($number);

function sum($oldvalue, $newvalue){
    return $oldvalue+$newvalue;
}

$newPerson = array_reduce($number, 'sum');
print_r($newPerson);
/// array te old and new valur create kore