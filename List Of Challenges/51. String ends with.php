<?php
/* 51. String ends with

    >Complete the solution so that it returns true if the first argument(string)
     passed in ends with the 2nd argument (also a string).
    EXAMPLE:
        solution('abc', 'bc') // returns true
        solution('abc', 'd') // returns false
    NOTES:
*/

$str = 'abc\n';
$ending = 'abc';


$funzione = solution($str, $ending);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function solution($str, $ending) {
    $index_string = strlen($str);

    for ($i = (strlen($ending) - 1); $i >= 0; $i--) {
        $index_string--;

        if ($ending[$i] != $str[$index_string]) {
            return false;
        }
    }
    return true;
}





?>
