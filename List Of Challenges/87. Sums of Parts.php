<?php
/*  87. Sums of Parts

    >Let us consider this example (array written in general format):
        ls = [0, 1, 3, 6, 10]
        Its following parts:
        ls = [0, 1, 3, 6, 10]
        ls = [1, 3, 6, 10]
        ls = [3, 6, 10]
        ls = [6, 10]
        ls = [10]
        ls = []
     The corresponding sums are (put together in a list): [20, 20, 19, 16, 10, 0]
     The function parts_sums will take as parameter a list ls
     and return a list of the sums of its parts as defined above.
    EXAMPLE:
        ls = [1, 2, 3, 4, 5, 6]
        parts_sums(ls) -> [21, 20, 18, 15, 11, 6, 0]
    NOTES:
        Some lists can be long.
*/


$ls = [1, 2, 3, 4, 5, 6];

$funzione = partsSums($ls);
echo '<pre>';
print_r($funzione);
echo '</pre';


function partsSums($ls) {
    $start = 0;

    $arr_num = [];
    while (count($arr_num) <= count($ls)) {

        $number = 0;
        for ($i = $start; $i < count($ls); $i++) {
            $number += $ls[$i];
        }
        $arr_num[] = $number;
        $start += 1;
    }

    return $arr_num;
}






?>
