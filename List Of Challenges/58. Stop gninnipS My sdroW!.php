<?php
/* 58. Stop gninnipS My sdroW!

    >Write a function that takes in a string of one or more words, and returns the same string,
     but with all five or more letter words reversed (Just like the name of this Kata).
    EXAMPLE:
        spinWords( "Hey fellow warriors" ) => returns "Hey wollef sroirraw"
        spinWords( "This is a test") => returns "This is a test"
        spinWords( "This is another test" )=> returns "This is rehtona test"
    NOTES:
        Strings passed in will consist of only letters and spaces.
        Spaces will be included only when more than one word is present.
*/

$str = 'Hey fellow warriors';

$funzione = spinWords($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function spinWords(string $str): string {
    $arr_str = explode(' ', $str);

    $new_array = [];
    foreach ($arr_str as $word) {
        if (strlen($word) >= 5) {
            $new_array[] = strrev($word);
        } else {
            $new_array[] = $word;
        }
    }

    $new_string = implode(' ',$new_array);

    return $new_string;
}




?>
