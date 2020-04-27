<?php
/* 67. Consecutive strings

    >You are given an array of string inputs strarr and an integer k.
     Your task is to return the longest possible string that can be derived
     by combining k consecutive elements of the input strarr.
    EXAMPLE:
        longest_consec(["zone", "abigail", "theta", "form", "libe", "zas"], 2)
        should return "abigailtheta"
    NOTES:
        In the case of there being multiple possible matches, only the first one will be considered correct.
        In any of the following cases, the return value should be an empty string "":
            strarr.length === 0
            strarr.length < k
            k <= 0
*/


$strarr = ["zone", "abigail", "theta", "form", "libe", "zas"];
$k = 2;

$funzione = longestConsec($strarr, $k);
echo '<pre>';
print_r($funzione);
echo '</pre';


function longestConsec($strarr, $k) {
    $arr_sorted = insertionSort($strarr, count($strarr));

    $new_string = '';
    for ($i = 0; $i < $k; $i++) {
        $new_string .= $arr_sorted[$i];
    }

    return $new_string;
}

function insertionSort($arr, $n) {      // insertion sort algorithm to order an array descending based on string length
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i-1;

        while ($j >= 0 && strlen($arr[$j]) < strlen($key)) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }

    return $arr;
}


?>
