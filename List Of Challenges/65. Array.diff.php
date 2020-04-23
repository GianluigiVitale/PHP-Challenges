<?php
/* 65. Array.diff

    >Your goal in this kata is to implement a difference function,
     which subtracts one list from another and returns the result.
     It should remove all values from list a, which are present in list b.
     If a value is present in b, all of its occurrences must be removed from the other:
    EXAMPLE:
        arrayDiff([1,2],[1]) == [2]
        arrayDiff([1,2,2,2,3],[2]) == [1,3]
    NOTES:
*/


$a = [1,2,2,2,3];
$b = [2,3];

$funzione = arrayDiff($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre';


function arrayDiff($a, $b) {
    return array_values(array_diff($a, $b));
}
// alternative solution without array_diff()
function arrayDiff($a, $b) {
    if (empty($b)) {
        return $a;
    }

    $a_c = $a;
    foreach ($b as $number_del) {
        foreach ($a_c as $key2 => $number) {
            if ($number === $number_del) {
                unset($a_c[$key2]);
            }
        }
    }

    return array_values($a_c);
}




?>
