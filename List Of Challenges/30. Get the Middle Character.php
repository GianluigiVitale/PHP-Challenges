<?php
/* 30. Get the Middle Character

    >You are going to be given a word. Your job is to return the middle character of the word.
     If the word's length is odd, return the middle character.
     If the word's length is even, return the middle 2 characters.
    EXAMPLE:
        Kata.getMiddle("test") should return "es"
        Kata.getMiddle("testing") should return "t"
        Kata.getMiddle("middle") should return "dd"
        Kata.getMiddle("A") should return "A"
    NOTES:
*/

$text = 'testing';

$funzione = getMiddle($text);
echo '<pre>';
print_r($funzione);
echo '</pre';


function getMiddle($text) {
    $middle_char = '';

    if (strlen($text) % 2 == 0) {
        $middle_char = $text[strlen($text) / 2 - 1] . $text[strlen($text) / 2];
    } else {
        $middle_char = $text[floor(strlen($text) / 2)];
    }

    return $middle_char;
}
?>
