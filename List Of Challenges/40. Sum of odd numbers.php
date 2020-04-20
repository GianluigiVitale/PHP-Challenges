<?php
/* 40. Sum of odd numbers

    >Given the triangle of consecutive odd numbers:
                        1
                     3     5
                  7     9    11
              13    15    17    19
           21    23    25    27    29
           ...
           Calculate the row sums of this triangle from the row index (starting at index 1) e.g.:
    EXAMPLE:
        rowSumOddNumbers(1); // 1
        rowSumOddNumbers(2); // 3 + 5 = 8
    NOTES:
*/

$n = 1;

$funzione = rowSumOddNumbers($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function rowSumOddNumbers($n) {
    return pow($n, 3);
}
// another solution
function rowSumOddNumbers($n) {
    if ($n == 1) {
        return 1;
    }

    $number_of_oddNumber = 0;
    for ($i = $n - 1; $i > 0; $i--) {   // I find how many odd numbers there are before the row $n
        $number_of_oddNumber += $i;
    }

    $last_odd_number = 1;
    for ($i = 1; $i < $number_of_oddNumber; $i++) {     // I get the last odd number before the row $n
        $last_odd_number += 2;
    }

    $odd_numbers_rowN = 0;
    for ($i = 0; $i < $n; $i++) {   // I get the sum of the numbers of the row $n
        $last_odd_number += 2;
        $odd_numbers_rowN += $last_odd_number;
    }

    return $odd_numbers_rowN;
}





?>
