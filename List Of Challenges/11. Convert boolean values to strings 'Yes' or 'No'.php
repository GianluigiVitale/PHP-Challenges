<?php
/* 11. Convert boolean values to strings 'Yes' or 'No'.

    >Write a function that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
    EXAMPLE:
    NOTES:
*/

$bool = true;

$funzione = boolToWord($bool);
echo '<pre>';
print_r($funzione);
echo '</pre';



function boolToWord($bool) {
    return ($bool) ? 'Yes' : 'No';
}
// without ternary operator
function boolToWord($bool) {
    if ($bool === true) {
        return 'Yes';
    }

    return 'No';
}
?>
