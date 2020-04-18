<?php
/* 10. Grasshopper - Summation

    >Write a program that finds the summation of every number from 1 to num.
     The number will always be a positive integer greater than 0.
    EXAMPLE:
        summation(2) -> 3
        1 + 2
        summation(8) -> 36
        1 + 2 + 3 + 4 + 5 + 6 + 7 + 8
    NOTES:
*/

$n = 8;

$funzione = summation($n);
echo '<pre>';
print_r($funzione);
echo '</pre';

function summation($n) {
    $sum = 0;

    for ($i = $n; $i >= 1; $i--) {
        $sum += $i;
    }

    return $sum;
}
?>
