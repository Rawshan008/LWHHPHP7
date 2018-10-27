<?php 
// array_splice() function cut from array and show. but
//origina array do not have splice array; 
$fruit = array('Banana','Apple','Orange','Gaova','Pum');
print_r($fruit); // output full array;
$newFruit = array_splice($fruit, 1, 3);
print_r($newFruit); // output only 1,2,4 index
print_r($fruit);  // output onely 0, 4 index.
