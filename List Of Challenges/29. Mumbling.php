<?php
/* 29. Mumbling

    >This time no story, no theory. The examples below show you how to write function accum:
    EXAMPLE:
        accum("abcd") -> "A-Bb-Ccc-Dddd"
        accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
        accum("cwAt") -> "C-Ww-Aaa-Tttt"
    NOTES:
        The parameter of accum is a string which includes only letters from a..z and A..Z.
*/

$s = 'ZpglnRxqenU';

$funzione = accum($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function accum($s) {
    $new_string = '';

    for ($i = 0; $i < strlen($s); $i++) {
        $new_string .= strtoupper($s[$i]);

        for ($j = 0; $j < $i; $j++) {   // to add as many char as the index of the char
            $new_string .= strtolower($s[$i]);
        }

        if ($i < strlen($s) - 1) { // if it's the last word don't add '-'
            $new_string .= '-';
        }
    }

    return $new_string;
}
?>
