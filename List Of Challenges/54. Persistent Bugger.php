<?php
/* 54. Persistent Bugger

    >Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence,
     which is the number of times you must multiply the digits in num until you reach a single digit.

    EXAMPLE:
        persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
        persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
        persistence(4) === 0; // because 4 is already a one-digit number
    NOTES:
*/

$num = 999;

$funzione = persistence($num);
echo '<pre>';
print_r($funzione);
echo '</pre';


function persistence(int $num): int {
    $i = 0;
    while ($num > 9) {
        $num = array_product(str_split($num));

        $i++;
    }

    return $i;
}
// another method
function persistence(int $num): int {
    if ($num < 10) {
        return 0;
    }

    $array_num = str_split($num);

    $new_number = 9999;     // variable that is going to be updated with the new number after the multiplications

    $i = 0;
    while (strlen(strval($new_number)) > 1) {   // until the variable $new_number contains only 1 number...
        $new_number = 1;

        foreach ($array_num as $key => $number) {   // I multiply the numbers of the array $array_num among themselves
            $new_number *= $number;
        }
        $array_num = str_split($new_number);

        $i++;
    }

    return $i;
}





?>
