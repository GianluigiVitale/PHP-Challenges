<?php
/* 56. Find The Parity Outlier

    >You are given an array (which will have a length of at least 3, but could be very large) containing integers.
     The array is either entirely comprised of odd integers or entirely comprised of even integers
      except for a single integer N. Write a method that takes the array as an argument and returns this "outlier" N.
    EXAMPLE:
        [2, 4, 0, 100, 4, 11, 2602, 36]
        Should return: 11 (the only odd number)

        [160, 3, 1719, 19, 11, 13, -21]
        Should return: 160 (the only even number)
    NOTES:
*/

$integers = [160, 3, 1719, 19, 11, 13, -21];

$funzione = find($integers);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find($integers) {
    $array_numbers = [
        'odd' => [
            'number' => 0,
            'times' => 0,
        ],
        'even' => [
            'number' => 0,
            'times' => 0,
        ],
    ];


    foreach ($integers as $key => $number) {
        if ($number % 2 == 0) {
            $array_numbers['even']['number'] = $number;
            $array_numbers['even']['times']++;
        } else {
            $array_numbers['odd']['number'] = $number;
            $array_numbers['odd']['times']++;
        }
    }

    if ($array_numbers['odd']['times'] > $array_numbers['even']['times']) {
        return $array_numbers['even']['number'];
    }
    return $array_numbers['odd']['number'];
}




?>
