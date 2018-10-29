<?php 

$number = array(1,3,2,4,5,6,8,8);
print_r($number);
if(in_array(6,$number)){
    echo "Array 2 here";
}
echo PHP_EOL;
$search_array = array_search(4, $number); //search aray value
echo $search_array; // 3 index nuber
echo PHP_EOL;
if(key_exists(22, $number)){
    echo "Array key exit"; // no key exit
}
