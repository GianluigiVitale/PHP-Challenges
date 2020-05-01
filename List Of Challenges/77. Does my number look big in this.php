<?php
/* 77. Does my number look big in this

    >A Narcissistic Number is a number which is the sum of its own digits,
     each raised to the power of the number of digits in a given base.
     In this Kata, we will restrict ourselves to decimal (base 10).
     Your code must return true or false depending upon whether the given number is a Narcissistic number in base 10.
    EXAMPLE:
        take 153 (3 digits):
        1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

        and 1634 (4 digits):
        1^4 + 6^4 + 3^4 + 4^4 = 1 + 1296 + 81 + 256 = 1634
    NOTES:
        Error checking for text strings or other invalid inputs is not required,
        only valid integers will be passed into the function.
*/


$value = 7;

$funzione = narcissistic($value);
echo $funzione ? 'true' : 'false';  // to print a boolean value

function narcissistic($value) {
    $arr = str_split($value);
    $power = strlen($value);

    $sum = 0;
    foreach ($arr as $number) {
        $sum += pow($number, $power);
    }

    if ($sum == $value) {
        return true;
    }

    return false;
}





?>
