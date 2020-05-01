<?php
/*  82. Split Strings

    >Create a funcion so that it splits the string into pairs of two characters.
     If the string contains an odd number of characters then it should replace
     the missing second character of the final pair with an underscore ('_').
    EXAMPLE:
        solution('abc') // should return ['ab', 'c_']
        solution('abcdef') // should return ['ab', 'cd', 'ef']
    NOTES:
*/


$str = "abcdef";

$funzione = solution($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solution($str) {
    if (strlen($str) % 2 != 0) {
        $str .= '_';
    }
    return str_split($str, 2);
}
// alternative method
function solution($str) {
    $arr = [];
    for ($i = 0; $i < strlen($str); $i += 2) {
        $arr[] = substr($str, $i, 2);
    }

    if (strlen($str) % 2 != 0) {
        $arr[count($arr)-1] .= '_';
    }

    return $arr;
}







?>
