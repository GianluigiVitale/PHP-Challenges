<?php
/* 48. Don't give me five!

    >In this kata you get the start number and the end number of a region and
     should return the count of all numbers except numbers with a 5 in it.
      The start and the end number are both inclusive!

    EXAMPLE:
        1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
        4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
    NOTES:
        The result may contain fives. ;-)
        The start number will always be smaller than the end number. Both numbers can be also negative!
*/

$start = 4;
$end = 17;


$funzione = dont_give_me_five($start, $end);
echo '<pre>';
print_r($funzione);
echo '</pre';


function dont_give_me_five($start, $end) {
    $total_numbers = 0;
    for ($i = $start; $i <= $end; $i++) {
        if (substr_count(strval($i), '5') == 0) {
            $total_numbers++;
        }
    }

    return $total_numbers;
}





?>
