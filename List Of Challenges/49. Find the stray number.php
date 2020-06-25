<?php
/* 49. Find the stray number

    >You are given an odd-length array of integers, in which all of them are the same, except for one single number.
    Create a function which accepts such an array, and returns that single different number.
    The input array will always be valid! (odd-length >= 3)
    EXAMPLE:
    NOTES:
*/

$arr = [4,2,2,2,2];


$funzione = stray($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';


function stray($arr) {
    $values = array_count_values($arr);

    foreach ($values as $key => $value) {
        if ($value == 1) {
            return $key;
        }
    }
}
// alternative solution without using array_count_values
function stray($arr) {
    $number_1 = [$arr[0], 0];   // index 0 is the number index 1 how many times it is in the array
    $number_2 = [];             // index 0 is the number index 1 how many times it is in the array

    foreach ($arr as $key => $number) {
        if ($number == $number_1[0]) {
            $number_1[1]++;
        } else {
            $number_2[0] = $number;
            $number_2[1]++;
        }
    }

    if ($number_1[1] < $number_2[1]) {
        return $number_1[0];
    }
    return $number_2[0];
}





?>
