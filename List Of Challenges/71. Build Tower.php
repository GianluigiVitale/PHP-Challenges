<?php
/* 71. Build Tower

    >Build Tower
     Build Tower by the following given argument:
     number of floors (integer and always greater than 0).
     Tower block is represented as *
    EXAMPLE:
        for example, a tower of 3 floors looks like below
        [
        '  *  ',
        ' *** ',
        '*****'
        ]
        and a tower of 6 floors looks like below
        [
        '     *     ',
        '    ***    ',
        '   *****   ',
        '  *******  ',
        ' ********* ',
        '***********'
        ]
    NOTES:
        return an array
*/


$n = 3;

$funzione = tower_builder($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function tower_builder($n) {
    $result = [];

    for ($i = 1; $i <= $n; $i++) {
        $result[] = str_repeat(' ', $n-$i) . str_repeat('*', ($i-1)*2+1) . str_repeat(' ', $n-$i);
    }

    return $result;
}
// another solution
function tower_builder($n) {
    $base_num = 1;
    for ($i = 1; $i < $n; $i++) {   // maximum asterisk last row
        $base_num += 2;
    }

    $spaces = ($base_num - 1) / 2;  // number of spaces before and after the asterisk

    $n_asterisk = 1;
    $towe = [];
    for ($i = 1; $i <= $n; $i++) {
        $line = '';
        for ($j = 1; $j <= $spaces; $j++) { // add the spaces before the asterisk
            $line .= ' ';
        }
        for ($j = 1; $j <= $n_asterisk; $j++) { // add the asterisk/s
            $line .= '*';
        }
        for ($j = 1; $j <= $spaces; $j++) { // add the spaces after the asterisk
            $line .= ' ';
        }
        $n_asterisk += 2;   // update the number of asterisk
        $spaces -= 1;       // and spaces

        $towe[] = $line;
    }

    return $towe;
}




?>
