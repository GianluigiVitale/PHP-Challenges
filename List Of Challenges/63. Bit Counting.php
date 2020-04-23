<?php
/* 63. Bit Counting

    >Write a function that takes an integer as input,
     and returns the number of bits that are equal to one in the binary representation of that number.
    EXAMPLE:
        The binary representation of 1234 is 10011010010, so the function should return 5 in this case
    NOTES:
        You can guarantee that input is non-negative.
*/


$n = 9;

$funzione = countBits($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function countBits($n)
{
    return substr_count(decbin($n), '1');
}




?>
