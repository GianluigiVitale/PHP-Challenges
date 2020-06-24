<?php
/* 6. Return Negative

    >In this simple assignment you are given a number and have to make it negative.
     But maybe the number is already negative?
    EXAMPLE:
        makeNegative(1)    // return -1
        makeNegative(-5)   // return -5
        makeNegative(0)    // return 0
        makeNegative(0.12) // return -0.12
    NOTES:
        The number can be negative already, in which case no change is required.
    Zero (0) is not checked for any specific sign. Negative zeros make no mathematical sense.
*/

$num = -20;

$funzione = makeNegative($num);
echo '<pre>';
print_r($funzione);
echo '</pre';


function makeNegative(float $num) : float {
    return ($num <= 0) ? $num : $num * -1;
}
// alternative solution
function makeNegative(float $num) : float {
    if ($num <= 0) {
        return $num;
    }

    return $num * -1;
}
?>
