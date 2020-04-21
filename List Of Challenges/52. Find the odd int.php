<?php
/* 52. Find the odd int

    >Given an array, find the integer that appears an odd number of times.
    There will always be only one integer that appears an odd number of times.
    EXAMPLE:
    NOTES:
*/

$seq = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];

$funzione = findIt($seq);
echo '<pre>';
print_r($funzione);
echo '</pre';


function findIt(array $seq) : int
{
    $array_num = array_count_values($seq);
    foreach ($array_num as $key => $number) {
        if ($number % 2 != 0) {
            return $key;
        }
    }
}

// alternative method without array_count_values
function findIt(array $seq) : int
{
    $array_numbers = [];    // this array contains as key the number and as value the times it is found in the array

    foreach ($seq as $key => $number) {
        if (empty($array_numbers[$number])) {   // if the number as a key doesn't exist it is declared and defined with 0
            $array_numbers[$number] = 0;
        }
        $array_numbers[$number]++;
    }

    foreach ($array_numbers as $key => $number) {
        if ($number % 2 != 0) {     // when the number of times the number appears in the array is odd return the number
            return $key;
        }
    }
}





?>
