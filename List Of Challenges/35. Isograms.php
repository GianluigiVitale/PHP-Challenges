<?php
/* 35. Isograms

    >An isogram is a word that has no repeating letters, consecutive or non-consecutive.
     Implement a function that determines whether a string that contains only letters is an isogram.
      Assume the empty string is an isogram. Ignore letter case.
    EXAMPLE:
        isIsogram "Dermatoglyphics" == true
        isIsogram "aba" == false
        isIsogram "moOse" == false -- ignore letter case
    NOTES:
*/

$string = 'Dermatoglyphics';

$funzione = isIsogram($string);
echo '<pre>';
print_r($funzione);
echo '</pre';

function isIsogram($string) {
    $string_lowercase = strtolower($string);

    for ($i = 0; $i < strlen($string); $i++) {
        $char_count = substr_count($string_lowercase, $string[$i]);
        if ($char_count > 1) {
            return false;
        }
    }

    return true;
}
?>
