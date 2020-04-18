<?php
/* 12. Reversed Strings

    >Write a function so that it reverses the string value passed into it.
    EXAMPLE:
    NOTES:
*/

$str = 'world';

$funzione = solution($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solution($str) {
    return strrev($str);
}
function solution($str) {   // another way
    $reversed_string = '';

    for ($i = strlen($str); $i >= 0; $i--) {
        $reversed_string .= $str[$i];
    }

    return $reversed_string;
}
?>
