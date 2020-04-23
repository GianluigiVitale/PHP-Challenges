<?php
/* 64. Replace With Alphabet Position

    >In this kata you are required to, given a string,
     replace every letter with its position in the alphabet.
    EXAMPLE:
        alphabet_position('The sunset sets at twelve o\' clock.') =>
        "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11"
    NOTES:
*/


$s = 'The sunset sets at twelve o\' clock.';

$funzione = alphabet_position($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function alphabet_position(string $s): string {
    $str = str_replace(' ', '', strtolower($s));

    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $arr_str = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($alphabet, $str[$i]) !== false) {
            $arr_str[] = strpos($alphabet, $str[$i]) + 1;
        }
    }

    return implode(' ', $arr_str);
}




?>
