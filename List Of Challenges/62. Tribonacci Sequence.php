<?php
/* 62. Tribonacci Sequence

    >As the name may already reveal, it works basically like a Fibonacci,
     but summing the last 3 (instead of 2) numbers of the sequence to generate the next.
     You need to create a fibonacci function that given a signature array/list,
     returns the first n elements - signature included of the so seeded sequence.
    EXAMPLE:
        [1, 1, 1] => [1, 1 ,1, 3, 5, 9, 17, 31, ...]
        [0, 0, 1] => [0, 0, 1, 1, 2, 4, 7, 13, 24, ...]
    NOTES:
        Signature will always contain 3 numbers
        n will always be a non-negative number
        if n == 0, then return an empty array
*/

$signature = [1,1,1];
$n = 10;

$funzione = tribonacci($signature, $n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function tribonacci($signature, $n) {
    while (sizeof($signature) < $n) {
        $signature[] = array_sum(array_slice($signature, -3));
    }

    return array_slice($signature, 0, $n);
}
// alternative solution
function tribonacci($signature, $n) {
    if ($n == 0) {
        return [];
    } elseif ($n <= 3) {
        return array_slice($signature, 0, $n);
    }

    $arr = $signature;
    for ($i = 3; $i < $n; $i++) {
        $new_number = $arr[count($arr) - 1] + $arr[count($arr) - 2] + $arr[count($arr) - 3]; // the new number is the sum of the last 3
        $arr[] = $new_number;
    }

    return $arr;
}




?>
