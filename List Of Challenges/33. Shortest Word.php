<?php
/* 33. Shortest Word

    >Simple, given a string of words, return the length of the shortest word(s).
    String will never be empty and you do not need to account for different data types.
    EXAMPLE:
    NOTES:
*/

$str = 'turns out random test cases are easier than writing out basic ones';

$funzione = findShort($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function findShort($str) {
    $array_str = explode(' ', $str);

    $shortest_word = $array_str[0];
    foreach ($array_str as $key => $value) {
        if (strlen($value) < strlen($shortest_word)) {
            $shortest_word = $value;
        }
    }

    return strlen($shortest_word);
}
?>
