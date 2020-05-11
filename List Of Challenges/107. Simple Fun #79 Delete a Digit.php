<?php
/*  107. Simple Fun #79 Delete a Digit

    >Given an integer n, find the maximal number you can obtain by deleting exactly one digit of the given number.

    [input] integer
    [output] an integer
    EXAMPLE:
        For n = 152, the output should be 52;
        For n = 1001, the output should be 101.
    NOTES:
        Constraints: 10 ≤ n ≤ 1000000.
*/


$n = 152;

$funzione = deleteDigit($n);
echo '<pre>';
print_r($funzione);
echo '</pre';



function deleteDigit($n) {
    $num_s = strval($n);
    $arr = [];

    $exception = 0;
    while ($exception <= strlen($num_s)-1) {
        $num = '';

        for ($i = 0; $i < strlen($num_s); $i++) {
            if ($i != $exception) {
                $num .= $num_s[$i];
            }
        }
        $arr[] = intval($num);
        $exception++;
    }

    return max($arr);
}







?>
