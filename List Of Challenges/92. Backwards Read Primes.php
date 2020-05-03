<?php
/*  92. Backwards Read Primes

    >Backwards Read Primes are primes that when read backwards in base 10 (from right to left) are a different prime.
     (This rules out primes which are palindromes.)
     Find all Backwards Read Primes between two positive given numbers (both inclusive),
     the second one always being greater than or equal to the first one.
     The resulting array or the resulting string will be ordered following the natural order of the prime numbers.
    EXAMPLE:
        13 17 31 37 71 73 are Backwards Read Primes
        13 is such because it's prime and read from right to left writes 31 which is prime too.
        Same for the others.

        backwardsPrime(2, 100) => [13, 17, 31, 37, 71, 73, 79, 97]
        backwardsPrime(9900, 10000) => [9923, 9931, 9941, 9967]
        backwardsPrime(501, 599) => []
    NOTES:
        Return only the first backwards-read prime between start and end or 0 if you don't find any
*/


$start = 70000;
$stop = 70245;

$funzione = backwardsPrime($start, $stop);
echo '<pre>';
print_r($funzione);
echo '</pre';


function backwardsPrime($start, $stop) {
    $arr = [];

    for ($i = $start; $i <= $stop; $i++) {  // loop each number

        $prime = is_prime($i);

        if ($prime) {   // if $i is prime
            $rev_num = intval(strrev(strval($i)));  // reverse number $i,    i.e. 13 becomes 31
            $rev_prime = is_prime($rev_num);

            if ($rev_prime && $rev_num != $i) {
                $arr[] = $i;
            }
        }
    }

    return $arr;
}

function is_prime($n) {     // if number in input is prime return false else true
    $root = sqrt($n);
    for ($j = 2; $j <= $root; $j++) {
        if ($n % $j == 0) {
            return false;
        }
    }
    return true;
}






?>
