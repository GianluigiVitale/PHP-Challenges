<?php
/* 5. Remove First and Last Character

    >Your goal is to create a function that removes the first and last characters of a string.
     You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
    EXAMPLE:
    NOTES:
*/

$s = 'place';

$funzione = remove_char($s);
echo '<pre>';
print_r($funzione);
echo '</pre';

function remove_char(string $s): string {
    return substr($s, 1, -1);
}
?>
