<?php
/* 32. Descending Order

    >Your task is to make a function that can take any non-negative integer as a argument
     and return it with its digits in descending order.
      Essentially, rearrange the digits to create the highest possible number.
    EXAMPLE:
        Input: 21445 Output: 54421
        Input: 145263 Output: 654321
        Input: 123456789 Output: 987654321
    NOTES:
*/

$n = 3024;

$funzione = descendingOrder($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function descendingOrder(int $n): int {
    $string_array = str_split($n);
    rsort($string_array);

    $string_sorted = implode('', $string_array);

    return (int)$string_sorted;
}
?>
