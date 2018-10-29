<?php 

// arrar marge function

$fruit = array('Banana','Orange','Apple','Pum', 'Goava');
print_r($fruit);
$newFruit1 = array_slice($fruit, 1, 3);
$newFruit2 = array_slice($fruit, 2, 3);
$newFruit = array_merge($newFruit1, $newFruit2);
print_r($newFruit1);
print_r($newFruit2);
print_r($newFruit); // add of the $newFruit1, $newFruit2
