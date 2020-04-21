<?php
/* 53. Multiples of 3 or 5

    >If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
     The sum of these multiples is 23.
    Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.
    EXAMPLE:
    NOTES:
        If the number is a multiple of both 3 and 5, only count it once.
*/

$number = 10;

$funzione = solution($number);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solution($number) {
    $sum_multiple = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum_multiple += $i;
        }
    }

    return $sum_multiple;
}





?>
