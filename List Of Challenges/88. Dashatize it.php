<?php
/*  88. Dashatize it

    >Given a number, return a string with dash'-'marks before and after each odd integer,
     but do not begin or end the string with a dash mark.
    EXAMPLE:
        dashatize(274) -> '2-7-4'
        dashatize(6815) -> '68-1-5'
    NOTES:
*/


$num = -28369;

$funzione = dashatize($num);
echo '<pre>';
print_r($funzione);
echo '</pre';


function dashatize($num) {
    $str = str_replace(['1', '3', '5', '7', '9', '--'], ['-1-', '-3-', '-5-', '-7-', '-9-', '-'], strval($num));

    return trim($str, '-');
}
// alternative method
function dashatize($num) {
    if ($num < 0) {
        $num  *= -1;
    }
    if (strlen($num) == 1) {
        return $num;
    }

    $num_s = strval($num);
    $str = '';

    if ($num_s[0] % 2 != 0) {
        $str .= $num_s[0] . '-';
    } else {
        $str .= $num_s[0];
    }

    for ($i = 1; $i < strlen($num_s)-1; $i++) {
        if ($num_s[$i] % 2 != 0) {
            $str .= '-' . $num_s[$i] . '-';
        } else {
            $str .= $num_s[$i];
        }
    }

    if ($num_s[strlen($num_s)-1] % 2 != 0) {
        $str .= '-' . $num_s[strlen($num_s)-1];
    } else {
        $str .= $num_s[strlen($num_s)-1];
    }

    return str_replace('--', '-', $str);
}






?>
