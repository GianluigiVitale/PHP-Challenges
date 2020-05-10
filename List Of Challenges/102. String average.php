<?php
/*  102. String average

    >You are given a string of numbers between 0-9.
    Find the average of these numbers and return it as a floored whole number
    (ie: no decimal places) written out as a string
    EXAMPLE:
        "zero nine five two" -> "four"
    NOTES:
        If the string is empty or includes a number greater than 9, return "n/a"
*/


$s = "zero nine five two";

$funzione = average_string($s);
echo '<pre>';
print_r($funzione);
echo '</pre';



function average_string($s) {
    if (empty($s)) {
        return "n/a";
    }

    $numbers = [
        'zero' => 0,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
    ];

    $arr = explode(' ', $s);
    $sum = 0;
    foreach ($arr as $n) {
        if ($numbers[$n] === null) {
            return "n/a";
        } else {
            $sum += $numbers[$n];
        }
    }

    $avg_n = floor($sum / count($arr));
    $numbers = array_flip($numbers);

    return $numbers[$avg_n];
}







?>
