<?php
/* 1. Multiply

    >Given two integers multiply them and return the result
    EXAMPLE:
    NOTES:
*/

$a = 5;
$b = 8;

$funzione = multiply($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre';

function multiply($a, $b) {
    return $a * $b;
}
?>
