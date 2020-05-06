<?php
/*  93. The Deaf Rats of Hamelin

    >Story:
        The Pied Piper has been enlisted to play his magical tune and coax all the rats out of town.
        But some of the rats are deaf and are going the wrong way!
    Kata Task:
        How many deaf rats are there?
    Legend:
        P = The Pied Piper
        O~ = Rat going left
        ~O = Rat going right
    EXAMPLE:
        ex1 ~O~O~O~O P has 0 deaf rats
        ex2 P O~ O~ ~O O~ has 1 deaf rat
        ex3 ~O~O~O~OP~O~OO~ has 2 deaf rats
    NOTES:
*/


$town = "~O~O~O~OP";

$funzione = countDeafRats($town);
echo '<pre>';
print_r($funzione);
echo '</pre';


function countDeafRats($town) {
    $town = str_replace(' ', '', $town);
    $position_p = strpos($town, 'P');

    $deaf_count = 0;
    for ($i = 1; $i < strlen($town); $i += 2) {
        if ($town[$i-1] == 'P') {
            $i--;
        } else {
            if ($town[$i-1] == 'O' && $town[$i] == '~' && $position_p > $i) {
                echo $i;
                $deaf_count++;
            } elseif ($town[$i-1] == '~' && $town[$i] == 'O' && $position_p < $i) {
                $deaf_count++;
                echo $i;
            }
        }
    }

    return $deaf_count;
}





?>
