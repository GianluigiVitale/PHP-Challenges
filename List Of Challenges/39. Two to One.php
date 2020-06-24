<?php
/* 39. Two to One

    >Take 2 strings s1 and s2 including only letters from a to z.
     Return a new sorted string, the longest possible, containing distinct letters,
     each taken only once - coming from s1 or s2.
    EXAMPLE:
        a = "xyaabbbccccdefww"
        b = "xxxxyyyyabklmopq"
        longest(a, b) -> "abcdefklmopqwxy"
        a = "abcdefghijklmnopqrstuvwxyz"
        longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
    NOTES:
*/

$a = "aretheyhere";
$b = "yestheyarehere";

$funzione = longest($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre';


function longest($a, $b) {
    $array = array_unique(str_split($a.$b));
    sort($array);

    return implode('', $array);
}
// another solution without using array unique
function longest($a, $b) {
    $total_string = $a . $b;

    $new_string = '';
    for ($i = 0; $i < strlen($total_string); $i++) {
        if (!strstr($new_string, $total_string[$i])) {
            $new_string .= $total_string[$i];
        }
    }

    $array = str_split($new_string);
    sort($array);
    $string_sorted = implode('', $array);

    return $string_sorted;
}
?>
