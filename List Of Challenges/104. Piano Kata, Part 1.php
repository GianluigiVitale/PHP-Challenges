<?php
/*  104. Piano Kata, Part 1

    >Consider a piano: http://tachyonlabs.com/miscimages/piano-keyboard-clipart.jpg
    The keys go from 1 to 88 black or white
    if I ask you to tell me which color the 90th key is you just have to start again
    from the beginning...
    Write a function which tells me which color is the key of the given number
    EXAMPLE:
        1     "white"
        12    "black"
        42    "white"
        100   "black"
        2017  "white"
    NOTES:
*/


$keyPressCount = 12;

$funzione = blackOrWhiteKey($keyPressCount);
echo '<pre>';
print_r($funzione);
echo '</pre';



function blackOrWhiteKey($keyPressCount) {
    $color_key = [
        '1' => 'white',
        '2' => 'black',
        '3' => 'white',
    ];

    for ($i = 1; $i <= 7; $i++) {   // to create the remaining values of the key of the piano
        // this is the pattern that repeats all across the piano 
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'black';
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'black';
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'black';
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'black';
        $color_key[count($color_key)+1] = 'white';
        $color_key[count($color_key)+1] = 'black';
        $color_key[count($color_key)+1] = 'white';
    }
    $color_key[count($color_key)+1] = 'white';

    $number = $keyPressCount;
    while ($number - 88 > 0) {
        $number -= 88;
    }

    return $color_key[$number];
}








?>
