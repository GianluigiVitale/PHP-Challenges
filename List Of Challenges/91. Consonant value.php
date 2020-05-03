<?php
/*  91. Consonant value

    >Given a lowercase string that has alphabetic characters only and no spaces,
     return the highest value of consonant substrings.
     Consonants are any letters of the alphabet except "aeiou".
     We shall assign the following values: a = 1, b = 2, c = 3, .... z = 26.
    EXAMPLE:
        For example, for the word "zodiacs", let's cross out the vowels. We get: "z o d ia cs"
        -- The consonant substrings are: "z", "d" and "cs" and the values are z = 26, d = 4 and cs = 3 + 19 = 22.
        The highest is 26.
        solve("zodiacs") = 26

        For the word "strength", solve("strength") = 57
        -- The consonant substrings are: "str" and "ngth" with values "str" = 19 + 20 + 18 = 57
        and "ngth" = 14 + 7 + 20 + 8 = 49.
        The highest is 57.
    NOTES:
*/


$s = "twelfthstreet";

$funzione = solve($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solve($s) {
    $alphabet = [
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
    ];

    $arr_points = [];
    $points = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $letter = $s[$i];
        if ($alphabet[$letter] !== null) {
            $points += $alphabet[$letter];
        } else {
            $arr_points[] = $points;
            $points = 0;
        }

        if ($i == (strlen($s)-1)) {
            $arr_points[] = $points;
            $points = 0;
        }
    }

    return max($arr_points);
}








?>
