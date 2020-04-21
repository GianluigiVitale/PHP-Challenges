<?php
/* 45. Sum of the first nth term of Series

    >Your task is to write a function which returns the sum of following series upto nth term(parameter).
    Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...

    You need to round the answer to 2 decimal places and return it as String.
    If the given value is 0 then it should return 0.00
    You will only be given Natural Numbers as arguments.
    EXAMPLE:
        SeriesSum(1) => 1 = "1.00"
        SeriesSum(2) => 1 + 1/4 = "1.25"
        SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"
    NOTES:
*/

$n = 3;


$funzione = series_sum($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function series_sum($n) {
    if ($n == 0) {
        return '0.00';
    }

    $sum = 1;
    $divisor = 1;
    for ($i = 1; $i < $n; $i++) {
        $divisor += 3;
        $sum += (1 / $divisor);
    }

    $sum_round = round($sum, 2);
    $sum_round_2digits_str = number_format((float)$sum_round, 2, '.', '');

    return $sum_round_2digits_str;
}





?>
