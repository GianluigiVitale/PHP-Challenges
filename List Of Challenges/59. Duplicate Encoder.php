<?php
/* 59. Duplicate Encoder

    >The goal of this exercise is to convert a string to a new string where each character in the new string
     is "(" if that character appears only once in the original string,
     or ")" if that character appears more than once in the original string.
     Ignore capitalization when determining if a character is a duplicate.
    EXAMPLE:
        "din"      =>  "((("
        "recede"   =>  "()()()"
        "Success"  =>  ")())())"
        "(( @"     =>  "))(("
    NOTES:
*/

$word = 'Success';

$funzione = duplicate_encode($word);
echo '<pre>';
print_r($funzione);
echo '</pre';


function duplicate_encode($word) {
    $word_lw = strtolower($word);

	$new_string = '';
    for ($i = 0; $i < strlen($word_lw); $i++) {
        if (substr_count($word_lw, $word_lw[$i]) > 1) {
            $new_string .= ')';
        } else {
            $new_string .= '(';
        }
    }

    return $new_string;
}




?>
