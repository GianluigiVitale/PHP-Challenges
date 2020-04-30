<?php
/* 74. Highest Scoring Word

    >Given a string of words, you need to find the highest scoring word.
     Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.
     You need to return the highest scoring word as a string.
     If two words score the same, return the word that appears earliest in the original string.
    EXAMPLE:
    NOTES:
        All letters will be lowercase and all inputs will be valid.
*/


$x = 'man i need a taxi up to ubud';

$funzione = high($x);
echo '<pre>';
print_r($funzione);
echo '</pre';


function high($x) {
    $alphabet = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
    ];

    $words = explode(' ', $x);

    $points = [];   // array with points of each word
    $point = 0;
    foreach ($words as $word) {
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $point += $alphabet[$letter];
        }
        $points[] = $point;
        $point = 0;
    }

    $max_point_word = array_search(max($points), $points); // the index of the word with maximum point from the array points
    return $words[$max_point_word];
}



?>
