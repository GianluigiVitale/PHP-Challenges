<?php
/* 15. Convert a Number to a String!


    >We need a function that can transform a number into a string.
    What ways of achieving this do you know?
    EXAMPLE:
        numberToString(123); // returns '123';`
        numberToString(999); // returns '999';`
    NOTES:
*/

$num = 4;

$funzione = numberToString($num);
echo '<pre>';
print_r($funzione);
echo '</pre';


function numberToString($num)
{
    return strval($num);
}
?>
