<?php
/*  86. Find the missing term in an Arithmetic Progression

    >An Arithmetic Progression is defined as one in which there is a constant difference between
     the consecutive terms of a given series of numbers.
     You are provided with consecutive elements of an Arithmetic Progression.
     There is however one hitch: exactly one term from the original series is missing
     from the set of numbers which have been given to you.
     The rest of the given series is the same as the original AP. Find the missing term.
     You have to write a function that receives a list, list size will always be at least 3 numbers.
     The missing term will never be the first or last one.
    EXAMPLE:
        findMissing([1, 3, 5, 9, 11]) == 7
    NOTES:
*/


$list = [1, 2, 3, 5];

$funzione = findMissing($list);
echo '<pre>';
print_r($funzione);
echo '</pre';


function findMissing($list) {
    $differences = [];
    for ($i = 1; $i < count($list); $i++) {
        $differences[] = $list[$i] - $list[$i-1];
    }

    if ($differences[0] > 0) {
        sort($differences);
    } else {
        rsort($differences);
    }

    $missing_num = 0;
    for ($i = 1; $i < count($list); $i++) {
        if ($list[$i] - $list[$i-1] != $differences[0]) {
            $missing_num = $list[$i] - $differences[0];
        }
    }

    return $missing_num;
}






?>
