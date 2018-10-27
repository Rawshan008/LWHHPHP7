<?php 
$fruit = array('Banana',"Apple",'Orange','Goava');
print_r($fruit);
$newFruit = array_slice($fruit, 1,3);
print_r($newFruit); // output start 0 index.
$newFruit = array_slice($fruit, 1,3, true);
print_r($newFruit); // output start existing index.