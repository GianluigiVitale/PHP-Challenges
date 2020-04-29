<?php
/* 70. Find the unique number

    >There is an array with some numbers. All numbers are equal except for one. Try to find it!
     It’s guaranteed that array contains at least 3 numbers.
    EXAMPLE:
        findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
        findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
    NOTES:
*/


$a = [0, 0, 0.55, 0, 0];

$funzione = find_uniq($a);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_uniq($a) {
    sort($a);

    if ($a[0] != $a[1]) {
        return $a[0];
    } else {
        return $a[count($a)-1];
    }
}





?>
