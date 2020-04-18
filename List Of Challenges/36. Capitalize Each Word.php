<?php
/* 36. Capitalize Each Word

    >Write a function that capitalize each word
    EXAMPLE:
        "How can mirrors be real if our eyes aren't real"
        "How Can Mirrors Be Real If Our Eyes Aren't Real"
    NOTES:
*/

$string = 'How can mirrors be real if our eyes aren\'t real';

$funzione = capitalize($string);
echo '<pre>';
print_r($funzione);
echo '</pre';

function capitalize($string)
{
    return ucwords($string);
}
?>
