<?php
/*  79. Detect Pangram

    >A pangram is a sentence that contains every single letter of the alphabet at least once.
    Given a string, detect whether or not it is a pangram. Return True if it is, False if not.
    EXAMPLE:
        The sentence "The quick brown fox jumps over the lazy dog" is a pangram,
        because it uses the letters A-Z at least once (case is irrelevant).
    NOTES:
        Ignore numbers and punctuation.
*/


$string = "The quick brown fox jumps over the lazy dog.";

$funzione = detect_pangram($string);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function detect_pangram($string) {
    $alphabet = range('a', 'z');

    foreach ($alphabet as $letter) {
        if (strpos(strtolower($string), $letter) === false) {
            return false;
        }
    }

    return true;
}
// another method
function detect_pangram($string) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $count = 0;
    for ($i = 0; $i < strlen($alphabet); $i++) {
        if (substr_count(strtolower($string), $alphabet[$i]) > 0) {
            $count += 1;
        }
    }

    if ($count == 26) {
        return true;
    }
    return false;
}





?>
