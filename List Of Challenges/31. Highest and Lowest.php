<?php
/* 31. Highest and Lowest

    >In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.
    EXAMPLE:
        highAndLow("1 2 3 4 5");  // return "5 1"
        highAndLow("1 2 -3 4 5"); // return "5 -3"
        highAndLow("1 9 3 4 -5"); // return "9 -5"
    NOTES:
        All numbers are valid Int32, no need to validate them.
        There will always be at least one number in the input string.
        Output string must be two numbers separated by a single space, and highest number is first.
*/

$numbers = "8 3 -5 42 -1 0 0 -9 4 7 4 -4";

$funzione = highAndLow($numbers);
echo '<pre>';
print_r($funzione);
echo '</pre';


function highAndLow($numbers)
{
    $array = explode(' ', $numbers);
    $max_number = max($array);
    $min_number = min($array);

    return $max_number . ' ' . $min_number;
}
?>
