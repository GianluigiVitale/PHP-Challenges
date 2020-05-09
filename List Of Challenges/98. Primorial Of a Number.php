<?php
/*  98. Primorial Of a Number

    >Given a number N , calculate its primorial.
    Definition (Primorial Of a Number):
    In primorial, not all the natural numbers get multiplied,
    only prime numbers are multiplied to calculate the primorial of a number.
    EXAMPLE:
        1- numPrimorial (3) ==> return (30)         2 * 3 * 5 = 30 .
        2- numPrimorial (5) ==> return (2310)       2 * 3 * 5 * 7 * 11 = 2310 .
        3- numPrimorial (6) ==> return (30030)      2 * 3 * 5 * 7 * 11 * 13 = 30030 .
    NOTES:
        Only positive numbers will be passed (N > 0) .
*/


$n = 9;

$funzione = numPrimorial($n);
echo '<pre>';
print_r($funzione);
echo '</pre';



function numPrimorial($n) {
    $arr_prime = [2];

    $last_prime = 2;

    $i = $last_prime+1;
    while (count($arr_prime) < $n) {
        $not_found = true;

        while ($not_found) {    // until a prime number is found
            $not_prime = true;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $not_prime = false;
                }
            }

            if ($not_prime) {
                $last_prime = $i;
                $arr_prime[] = $i;
                $not_found = false;
            }

            $i++;
        }
    }

    $num = 1;
    foreach ($arr_prime as $n) {
        $num *= $n;
    }

    return $num;
}







?>
