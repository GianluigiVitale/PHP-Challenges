<?php
/* 57. Counting Duplicates

    >Write a function that will return the count of distinct case-insensitive alphabetic characters
     and numeric digits that occur more than once in the input string.
     The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.
    EXAMPLE:
        "abcde" -> 0 # no characters repeats more than once
        "aabbcde" -> 2 # 'a' and 'b'
        "aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
        "indivisibility" -> 1 # 'i' occurs six times
        "Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
        "aA11" -> 2 # 'a' and '1'
        "ABBA" -> 2 # 'A' and 'B' each occur twice
    NOTES:
*/

$text = 'aabBcde';

$funzione = duplicateCount($text);
echo '<pre>';
print_r($funzione);
echo '</pre';


function duplicateCount($text) {
    $duplicate_count = 0;

    $array = array_count_values(str_split(strtolower($text)));
    foreach ($array as $key => $count) {
        if ($count > 1) {
            $duplicate_count++;
        }
    }

    return $duplicate_count;
}
// alternative method
function duplicateCount($text) {
    $text = strtolower($text);

    $unique_char = '';
    $char_repeated = '';
    for ($i = 0; $i < strlen($text); $i++) {
        if (strpos($unique_char, $text[$i]) === false) {
            $unique_char .= $text[$i];
        } elseif (strpos($char_repeated, $text[$i]) === false) {
            $char_repeated .= $text[$i];
        }
    }

    return strlen($char_repeated);
}




?>
