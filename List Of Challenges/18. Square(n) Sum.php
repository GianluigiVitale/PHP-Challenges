<?php
/* 18. Square(n) Sum

    >Create a funciton so that it squares each number passed into it and then sums the results together.
    EXAMPLE:
        given [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
    NOTES:
*/

$numbers = [0, 3, 4, 5];

$funzione = square_sum($numbers);
echo '<pre>';
print_r($funzione);
echo '</pre';


function square_sum($numbers) : int {
    $square_sum = 0;
    foreach ($numbers as $key => $value) {
        $square_sum += pow($value, 2);
    }

    return $square_sum;
}
?>
