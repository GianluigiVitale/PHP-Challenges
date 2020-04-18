<?php
/* 34. Exes and Ohs

    >Check to see if a string has the same amount of 'x's and 'o's.
    The method must return a boolean and be case insensitive. The string can contain any char.
    EXAMPLE:
        XO("ooxx") => true
        XO("xooxx") => false
        XO("ooxXm") => true
        XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
        XO("zzoo") => false
    NOTES:
*/

$s = 'xxxoo';

$funzione = XO($s);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function XO($s) {
    $s_lowercase = strtolower($s);

    $x_count = substr_count($s_lowercase, 'x');
    $o_count = substr_count($s_lowercase, 'o');

    if ($x_count == 0 && $o_count == 0 || $x_count == $o_count) {
        return true;
    }
    return false;
}
?>
