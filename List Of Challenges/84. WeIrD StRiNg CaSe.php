<?php
/*  84. WeIrD StRiNg CaSe

    >Write a function that accepts a string, and returns the same string
     with all even indexed characters in each word upper cased,
     and all odd indexed characters in each word lower cased.
    EXAMPLE:
        toWeirdCase("String"); // => returns "StRiNg"
        toWeirdCase("Weird string case"); // => returns "WeIrD StRiNg CaSe"
    NOTES:
        The passed in string will only consist of alphabetical characters and spaces(' ').
        Spaces will only be present if there are multiple words.
        Words will be separated by a single space(' ').
*/


$string = 'Hello world foo bar baz';
$string = 'wEll i GuesS you passed';

$funzione = toWeirdCase($string);
echo '<pre>';
print_r($funzione);
echo '</pre';


function toWeirdCase($string) {
    $arr = explode(' ', $string);

    $arr_words = [];
    foreach ($arr as $word) {
        $new_word = '';
        for ($i = 0; $i < strlen($word); $i++) {
            if ($i % 2 == 0) {
                $new_word .= strtoupper($word[$i]);
            } else {
                $new_word .= strtolower($word[$i]);
            }
        }
        $arr_words[] = $new_word;
        $new_word = '';
    }

    return implode(' ', $arr_words);
}





?>
