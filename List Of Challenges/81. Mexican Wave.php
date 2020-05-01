<?php
/*  81. Mexican Wave

    >In this simple Kata your task is to create a function that turns a string into a Mexican Wave.
        The wave (known as the Mexican wave in the English-speaking world outside North America)
        is an example of metachronal rhythm achieved in a packed stadium when successive
        groups of spectators briefly stand, yell, and raise their arms.
        Immediately upon stretching to full height, the spectator returns to the usual seated position.
    You will be passed a string and you must return that string in an array where an uppercase letter is a person standing up.
    EXAMPLE:
        wave("hello") => []string{"Hello", "hEllo", "heLlo", "helLo", "hellO"}
    NOTES:
        1.  The input string will always be lower case but maybe empty.
        2.  If the character in the string is whitespace then pass over it as if it was an empty seat.
*/


$people = " gap ";

$funzione = wave($people);
echo '<pre>';
print_r($funzione);
echo '</pre';


function wave($people) {
    $wave = [];
    for ($i = 0; $i < strlen($people); $i++) {
        if ($people[$i] != ' ') {
            $word = $people;
            $word[$i] = strtoupper($word[$i]);

            $wave[] = $word;
        }
    }

    return $wave;
}







?>
