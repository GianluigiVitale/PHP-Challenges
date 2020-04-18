<?php
/* 4. Opposite number

    >Very simple, given a number, find its opposite.
    EXAMPLE:
        1: -1
        14: -14
        -34: 34
    NOTES:
*/

$n = 14;

$funzione = opposite($n);
echo '<pre>';
print_r($funzione);
echo '</pre';

function opposite($n) {
    return $n * -1;
}
?>
