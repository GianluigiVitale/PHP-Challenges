<?php
/* 46. Reverse words

    >Create a function that accepts a string parameter, and reverses each word in the string.
     All spaces in the string should be retained.
    EXAMPLE:
        "This is an example!" ==> "sihT si na !elpmaxe"
        "double  spaces"      ==> "elbuod  secaps"
    NOTES:
*/

$str = 'double  spaces';


$funzione = reverseWords($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function reverseWords($str) {
    $array = explode(' ', $str);

    $reverse_array = [];
    foreach ($array as $key => $word) {
        $reverse_array[] = strrev($word);
    }
    $new_string = implode(' ', $reverse_array);

    return $new_string;
}





?>
