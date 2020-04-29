<?php
/* 72. Convert string to camel case

    >Complete the method/function so that it converts dash/underscore delimited words into camel casing.
     The first word within the output should be capitalized only if the original word was capitalized
     (known as Upper Camel Case, also often referred to as Pascal case).
    EXAMPLE:
        toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
        toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"
    NOTES:
*/


$str = "the_stealth_warrior";

$funzione = toCamelCase($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function toCamelCase($str) {
    for ($i=0; $i < strlen($str); $i++) {
        if ($str[$i-1] == '_' || $str[$i-1] == '-') {
            $str[$i] = strtoupper($str[$i]);
        }
    }
    $str = str_replace(['_', '-'], '', $str);

    return $str;
}




?>
