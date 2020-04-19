<?php
/* 38. Complementary DNA

    >In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G".
     You have function with one side of the DNA (string, except for Haskell);
     you need to get the other complementary side.
     DNA strand is never empty or there is no DNA at all (again, except for Haskell).
     So for the character G you have to change it to C, C becomes G, A becomes T and T becomes A
    EXAMPLE:
        DNA_strand("ATTGC") // returns "TAACG"
        DNA_strand("GTAT") // returns "CATA"
    NOTES:
*/

$dna = "TTTT";

$funzione = DNA_strand($dna);
echo '<pre>';
print_r($funzione);
echo '</pre';


function DNA_strand($dna) {
    $new_string = '';
    for ($i = 0; $i < strlen($dna); $i++) {
        if ($dna[$i] == 'T') {
            $new_string .= 'A';
        } elseif ($dna[$i] == 'A') {
            $new_string .= 'T';
        } elseif ($dna[$i] == 'C') {
            $new_string .= 'G';
        } elseif ($dna[$i] == 'G') {
            $new_string .= 'C';
        }
    }

    return $new_string;
}
?>
