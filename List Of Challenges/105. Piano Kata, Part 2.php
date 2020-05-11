<?php
/*  105. Piano Kata, Part 2

    >Consider a piano: http://tachyonlabs.com/miscimages/piano-keyboard-with-notes-clipart.jpg
    The keys go from 1 to 88
    if I ask you to tell me which note the 90th key is you just have to start again
    from the beginning...
    Write a function which tells me which note is the key of the given number
    EXAMPLE:
        1     "A"
        12    "G#"
        42    "D"
        100   "G#"
        2017  "F"
    NOTES:
*/


$keyPressCount = 12;

$funzione = whichNote($keyPressCount);
echo '<pre>';
print_r($funzione);
echo '</pre';



function whichNote($keyPressCount) {
    return array("A", "A#", "B", "C", "C#", "D", "D#", "E", "F", "F#", "G", "G#")[($keyPressCount - 1) % 88 % 12];
}








?>
