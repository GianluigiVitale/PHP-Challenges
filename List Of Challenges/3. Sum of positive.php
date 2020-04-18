<?php
/* 3. Sum of positive

    >You get an array of numbers, return the sum of all of the positives ones.
    EXAMPLE:
        [1,-4,7,12] => 1 + 7 + 12 = 20
    NOTES:
        if there is nothing to sum, the sum is default to 0.
*/

$arr = [-1, 2, 3, 4, -5];

$funzione = positive_sum($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';

function positive_sum($arr) {
    if (empty($arr)) {
        return 0;
    } else {
        $sum = 0;
        foreach ($arr as $key => $value) {
            if ($value > 0) {
                $sum += $value;
            }
        }

        return $sum;
    }
}
?>
