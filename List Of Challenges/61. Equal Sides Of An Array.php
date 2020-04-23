<?php
/* 61. Equal Sides Of An Array

    >You are going to be given an array of integers.
     Your job is to take that array and find an index N where the sum of the integers to the left of N
     is equal to the sum of the integers to the right of N.
     If there is no index that would make this happen, return -1.
    EXAMPLE:
        Let's say you are given the array {1,2,3,4,3,2,1}: Your function will return the index 3,
        because at the 3rd position of the array, the sum of left side of the index ({1,2,3})
        and the sum of the right side of the index ({3,2,1}) both equal 6.

        Let's look at another one.
        You are given the array {1,100,50,-51,1,1}: Your function will return the index 1,
        because at the 1st position of the array, the sum of left side of the index ({1})
        and the sum of the right side of the index ({50,-51,1,1}) both equal 1.

        Last one:
        You are given the array {20,10,-80,10,10,15,35}
        At index 0 the left side is {}
        The right side is {10,-80,10,10,15,35}
        They both are equal to 0 when added. (Empty arrays are equal to 0 in this problem)
        Index 0 is the place where the left side and right side are equal.

    NOTES:
        If you do not find an index that fits the rules, then you will return -1
        If you are given an array with multiple answers, return the lowest correct index.
*/

$arr = [1,2,3,4,3,2,1];

$funzione = find_even_index($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_even_index($arr) {
    foreach ($arr as $index => $number) {
        $arr_left = array_slice($arr, 0, $index);
        $arr_right = array_slice($arr, $index + 1);

        $arr_left_sum = array_sum($arr_left);
        $arr_right_sum = array_sum($arr_right);

        if ($arr_left_sum == $arr_right_sum) {
            return $index;
        }
    }

    return -1;
}
// alternative solution
function find_even_index($arr) {
    $arr_copy = $arr;

    $number_left_sum = 0;
    foreach ($arr_copy as $key => $number) {
        unset($arr_copy[$key]);

        if ($number_left_sum == array_sum($arr_copy)) {
            return $key;
        } else {
            $number_left_sum += $number;
        }
    }

    return -1;
}




?>
