<?php 

$number = array(1,2,3,4,5,6,7,8,9,10,11,12);
print_r($number);
// array walk(), ai function ta full array ar modde chalano jai. mane ata dia full array te operation kora jai.

function squere($n){
    printf("%d number array squire is %d\n", $n, $n*$n);
}
array_walk($number, 'squere');
// array map abr array_walk function k abe array te rupantorito kore.

function cube($n){
    return $n*$n*$n;
}
$newMap = array_map('cube', $number);
print_r($newMap);
// array_filter, array theke kono kisu filter kre ber korta k bole.
function odd($n){
    return $n%2==0;
}
$newOdd = array_filter($number, 'odd');
print_r($newOdd);
// akta array theke tader be koro jader nam ar first letter r dia suru,
$person = array('Rahim', 'Karom', 'Roton', 'Rupsa', 'Monir');
function rFilter($n){
    return $n[0] == strtoupper('r');
}
$newPerson = array_filter($person, 'rFilter');
print_r($newPerson);