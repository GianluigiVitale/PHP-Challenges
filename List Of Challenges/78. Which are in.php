<?php
/* 78. Which are in

    >Given two arrays of strings a1 and a2 return a sorted array r
     in lexicographical order of the strings of a1 which are substrings of strings of a2.
    EXAMPLE:
        #Example 1: a1 = ["arp", "live", "strong"]
            a2 = ["lively", "alive", "harp", "sharp", "armstrong"]
            returns ["arp", "live", "strong"]

        #Example 2: a1 = ["tarp", "mice", "bull"]
            a2 = ["lively", "alive", "harp", "sharp", "armstrong"]
            returns []
    NOTES:
        Beware: r must be without duplicates.
*/


// $array1 = ["arp", "live", "strong"];
$array1 = ["live", "strong", "arp"];
$array2 = ["lively", "alive", "harp", "sharp", "armstrong"];

$funzione = inArray($array1, $array2);
echo '<pre>';
print_r($funzione);
echo '</pre';


function inArray($array1, $array2) {

    $words_included = [];
    foreach ($array1 as $word1) {
        $counter = true;
        foreach ($array2 as $word2) {
            if (substr_count($word2, $word1) > 0 && $counter === true) {
                $words_included[] = $word1;
                $counter = false;
            }
        }
    }
    sort($words_included);

    return $words_included;
}





?>
