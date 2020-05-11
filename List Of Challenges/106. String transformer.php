<?php
/*  106. String transformer

    >Given a string, return a new string that has transformed based on the input:

    Change case of every character, ie. lower case to upper case, upper case to lower case.
    Reverse the order of words from the input.
    EXAMPLE:
        "Example Input" ==> "iNPUT eXAMPLE"
    NOTES:
*/


$s = "Example string";

$funzione = string_transformer($s);
echo '<pre>';
print_r($funzione);
echo '</pre';



function string_transformer($s) {
    $arr = explode(' ', $s);

    $n_arr = [];
    foreach ($arr as $word) {
        $new_word = '';
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            if ($letter == strtoupper($letter)) {
                $new_word .= strtolower($letter);
            } else {
                $new_word .= strtoupper($letter);
            }
        }
        $n_arr[] = $new_word;
    }

    return implode(' ', array_reverse($n_arr));
}








?>
