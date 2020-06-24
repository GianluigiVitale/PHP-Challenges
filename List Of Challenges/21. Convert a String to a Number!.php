<?php
/* 21. Convert a String to a Number!

    >We need a function that can transform a string into a number. What ways of achieving this do you know?
    EXAMPLE:
        stringToNumber("1234") === 1234
        stringToNumber("605" ) === 605
        stringToNumber("1405") === 1405
        stringToNumber("-7"  ) === -7
    NOTES:
        Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.

*/

$str = '1234';

$funzione = stringToNumber($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function stringToNumber($str) {
    return (int)$str;
}
// alternative solution
function stringToNumber($str) {
    return intval($str);
}
?>
