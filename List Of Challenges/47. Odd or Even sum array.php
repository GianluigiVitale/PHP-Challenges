<?php
/* 47. Odd or Even sum array

    >Given a list of numbers, determine whether the sum of its elements is odd or even.
    Give your answer as a string matching "odd" or "even".
    EXAMPLE:
        odd_or_even([0])          ==  "even"
        odd_or_even([0, 1, 4])    ==  "odd"
        odd_or_even([0, -1, -5])  ==  "even"
    NOTES:
        If the input array is empty consider it as: [0] (array with a zero).

*/

$a = [2, 5, 34, 6];


$funzione = odd_or_even($a);
echo '<pre>';
print_r($funzione);
echo '</pre';


function odd_or_even(array $a): string {
    return (array_sum($a) % 2 == 0) ? 'even' : 'odd';
}
// alternative solution without using array sum and ternary operator
function odd_or_even(array $a): string {
    $sum = 0;
    foreach ($a as $key => $number) {
        $sum += $number;
    }

    if ($sum % 2 == 0) {
        return 'even';
    }
    return 'odd';
}





?>
