<?php
/* 2. Even or Odd

    >Create a function that takes an integer as an argument and returns "Even" for even numbers
     or "Odd" for odd numbers.
    EXAMPLE:
    NOTES:
*/

$n = 2;

$funzione = even_or_odd($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function even_or_odd(int $n): string {
    return ($n % 2 == 0) ? 'Even' : 'Odd';
}
// alternative solution
function even_or_odd(int $n): string {
    if ($n % 2 == 0) {
        return 'Even';
    } else {
        return 'Odd';
    }
}
?>
