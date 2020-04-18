<?php
/* 20. Beginner - Lost Without a Map

    >Given an array of integers, return a new array with each value doubled.

    EXAMPLE:
        [1, 2, 3] --> [2, 4, 6]
    NOTES:
*/

$x = [4, 1, 1, 1, 4];

$funzione = maps($x);
echo '<pre>';
print_r($funzione);
echo '</pre';


function maps($x)
{
    $array_doubled = [];
    foreach ($x as $key => $value) {
        $array_doubled[] = $value * 2;
    }

    return $array_doubled;
}
?>
