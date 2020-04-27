<?php
/* 69. Find the missing letter

    >Find the missing letter
     Write a method that takes an array of consecutive (increasing) letters as input an
     that returns the missing letter in the array.
     You will always get an valid array. And it will be always exactly one letter be missing.
     The length of the array will always be at least 2.
     The array will always contain letters in only one case.
    EXAMPLE:
        ["a","b","c","d","f"] -> "e"
        ["O","Q","R","S"] -> "P"
    NOTES:
        (Use the English alphabet with 26 letters!)
*/


$array = ['a','b','c','d','f'];
$array = ['O','Q','R','S'];

$funzione = find_missing_letter($array);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_missing_letter($array) {
    if ($array[0] == strtoupper($array[0])) {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    } else {
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    }

    $pos = strpos($alphabet, $array[0]);
    foreach ($array as $key => $value) {
        if ($value != $alphabet[$pos+$key]) {
            return $alphabet[$pos+$key];
        }
    }
}





?>
