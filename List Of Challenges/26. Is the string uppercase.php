<?php
/* 26. Is the string uppercase

    >Create a method is_uppercase() to see whether the string is ALL CAPS. For example:
    EXAMPLE:
        is_uppercase("c") == false
        is_uppercase("C") == true
        is_uppercase("hello I AM DONALD") == false
        is_uppercase("HELLO I AM DONALD") == true
        is_uppercase("ACSKLDFJSgSKLDFJSKLDFJ") == false
        is_uppercase("ACSKLDFJSGSKLDFJSKLDFJ") == true
    NOTES:
        In this Kata, a string is said to be in ALL CAPS whenever it does not contain any lowercase letter
         so any string containing no letters at all is trivially considered to be in ALL CAPS.
*/

$str = 'Hello';

$funzione = is_uppercase($str);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function is_uppercase($str) {
    if (strtoupper($str) == $str) {
        return true;
    }
    return false;
}
?>
