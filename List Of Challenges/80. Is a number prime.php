<?php
/*  80. Is a number prime

    >Define a function that takes an integer argument and returns logical value true or false
     depending on if the integer is a prime.
     Per Wikipedia, a prime number (or a prime) is a natural number greater than
     1 that has no positive divisors other than 1 and itself.
    EXAMPLE:
        is_prime(1)     false
        is_prime(2)     true
        is_prime(-1)    false
    NOTES:
        You can assume you will be given an integer input.
        You can not assume that the integer will be only positive.
        You may be given negative numbers as well (or 0).
        There are no fancy optimizations required, but still the most trivial solutions might time out.
        Try to find a solution which does not loop all the way up to n.
*/


$n = 8;

$funzione = is_prime($n);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function is_prime($n) {
    if ($n <= 1) {
        return false;
    }

    $root = sqrt($n);
    for ($i = 2; $i <= $root; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}







?>
