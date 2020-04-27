<?php
/* 68. Are they the same

    >Given two arrays a and b write a function that checks whether the two arrays have the "same" elements
     "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.
    EXAMPLE:
        a = [121, 144, 19, 161, 19, 144, 19, 11]
        b = [121, 14641, 20736, 361, 25921, 361, 20736, 361]
        returns true because in b 121 is the square of 11, 14641 is the square of 121,
        20736 the square of 144, 361 the square of 19, 25921 the square of 161, and so on
    NOTES:
        a or b might be []
        a or b might be null
        If a or b are null return false.
*/


$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];

$funzione = comp($a1, $a2);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function comp($a1, $a2) {
    if ($a1 === null || $a2 === null || count($a1) != count($a2)) {
        return false;
    }
    sort($a1);
    sort($a2);

    foreach ($a1 as $key => $number) {
        if ($number * $number !== $a2[$key]) {
            return false;
        }
    }
    return true;
}





?>
