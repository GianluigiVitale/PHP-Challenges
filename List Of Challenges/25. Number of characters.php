<?php
/* 25. Number of characters

    >Create a function called strCount that accepts 2 string arguments
    and returns an integer of the count of occurrences the 2nd argument is found in the first one.
    If no occurrences can be found, a count of 0 should be returned.
    EXAMPLE:
        strCount('Hello', 'o') // => 1
        strCount('Hello', 'l') // => 2
        strCount('', 'z')      // => 0
    NOTES:
        The first argument can be an empty string
        The second string argument will always be of length 1
*/

$str = 'Hello';
$letter = 'o';

$funzione = strCount($str, $letter);
echo '<pre>';
print_r($funzione);
echo '</pre';


function strCount($str, $letter) {
    return substr_count($str, $letter);
}
// without using substr_count
function strCount($str, $letter) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $letter) {
            $count++;
        }
    }

    return $count;
}
?>
