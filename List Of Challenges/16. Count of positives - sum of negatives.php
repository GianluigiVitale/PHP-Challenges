<?php
/* 16. Count of positives - sum of negatives

    >Given an array of integers.
    Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
    If the input array is empty or null, return an empty array.
    EXAMPLE:
        For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
    NOTES:
*/

$input = [0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14];

$funzione = countPositivesSumNegatives($input);
echo '<pre>';
print_r($funzione);
echo '</pre';


function countPositivesSumNegatives($input) {
    if (empty($input)) {
        return [];
    }

    $count_positive = 0;
    $sum_negative = 0;
    foreach ($input as $key => $value) {
        if ($value > 0) {
            $count_positive += 1;
        } else {
            $sum_negative += $value;
        }
    }

    return [$count_positive, $sum_negative];
}
?>
