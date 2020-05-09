<?php
/*  97. Nato Words

    >You'll have to translate a string to Pilot's alphabet (NATO phonetic alphabet).
    wiki => https://en.wikipedia.org/wiki/NATO_phonetic_alphabet
    EXAMPLE:
        If you can read => India Foxtrot Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta
    NOTES:
        Keep the punctuation, and remove the spaces.
        Use Xray without dash or space.
        Although the proper alphabet for j is Juliett you have to use Juliet here
*/


// $words = 'If you can read';
// $words = 'Did not see that coming';
$words = 'go for it!';

$funzione = to_nato($words);
echo '<pre>';
print_r($funzione);
echo '</pre';



function to_nato($words) {
    $nato = [
        'a' => 'Alfa',
        'b' => 'Bravo',
        'c' => 'Charlie',
        'd' => 'Delta',
        'e' => 'Echo',
        'f' => 'Foxtrot',
        'g' => 'Golf',
        'h' => 'Hotel',
        'i' => 'India',
        'j' => 'Juliet',
        'k' => 'Kilo',
        'l' => 'Lima',
        'm' => 'Mike',
        'n' => 'November',
        'o' => 'Oscar',
        'p' => 'Papa',
        'q' => 'Quebec',
        'r' => 'Romeo',
        's' => 'Sierra',
        't' => 'Tango',
        'u' => 'Uniform',
        'v' => 'Victor',
        'w' => 'Whiskey',
        'x' => 'Xray',
        'y' => 'Yankee',
        'z' => 'Zulu'
    ];

    $words = strtolower(str_replace(' ', '', $words));
    $arr = [];
    for ($i = 0; $i < strlen($words); $i++) {
        if ($nato[$words[$i]] === null) {
            $arr[] = $words[$i];
        } else {
            $arr[] = $nato[$words[$i]];
        }
    }

    return implode(' ', $arr);
}







?>
