<?php
/* 50. Breaking chocolate problem

    >Your task is to split the chocolate bar of given dimension n x m into small squares.
     Each square is of size 1x1 and unbreakable. Implement a function that will return minimum number of breaks needed.
    EXAMPLE:
        For example if you are given a chocolate bar of size 2 x 1 you can split it to single squares in just one break,
         but for size 3 x 1 you must do two breaks.
    NOTES:
*/

$n = 3;
$m = 1;


$funzione = breakChocolate($n, $m);
echo '<pre>';
print_r($funzione);
echo '</pre';


function breakChocolate($n, $m) {
    $squares = $n * $m - 1;

    return $squares;
}





?>
