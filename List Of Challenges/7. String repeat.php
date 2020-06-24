<?php
/* 7. String repeat

    >Write a function called repeatString which repeats the given String src exactly count times.
    EXAMPLE:
        repeatStr(6, "I") // "IIIIII"
        repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"
    NOTES:
*/

$n = 3;
$str = '*';

$funzione = repeatStr($n, $str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function repeatStr($n, $str) {
    $new_string = '';
    for ($i = 1; $i <= $n; $i++) {
        $new_string .= $str;
    }

    return $new_string;
}
?>
