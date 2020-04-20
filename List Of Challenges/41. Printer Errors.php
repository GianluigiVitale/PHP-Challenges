<?php
/* 41. Printer Errors

    >In a factory a printer prints labels for boxes. For one kind of boxes the printer has to use colors which,
     for the sake of simplicity, are named with letters from a to m.

    The colors used by the printer are recorded in a control string.
     For example a "good" control string would be aaabbbbhaijjjm meaning that the printer used three times color a,
     four times color b, one time color h then one time color a...

    Sometimes there are problems: lack of colors, technical malfunction and a "bad" control string is produced
     e.g. aaaxbbbbyyhwawiwjjjwwm with letters not from a to m.

    You have to write a function printer_error which given a string will output the error rate of the printer
     as a string representing a rational whose numerator is the number of errors and
     the denominator the length of the control string. Don't reduce this fraction to a simpler expression.
    EXAMPLE:
        s="aaabbbbhaijjjm"
        error_printer(s) => "0/14"
        s="aaaxbbbbyyhwawiwjjjwwm"
        error_printer(s) => "8/22"
    NOTES:
    The string has a length greater or equal to one and contains only letters from ato z.

*/

$s = 'kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu';

$funzione = printerError($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function printerError($s) {
    $length_string = strlen($s);
    $new_str_wo_char = preg_replace('/[a-m]/', '', $s);

    return strlen($new_str_wo_char) . '/' . $length_string;
}
// another solution
function printerError($s) {
    $length_string = strlen($s);

    $allowed_char = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];

    $errors = 0;
    for ($i = 0; $i < $length_string; $i++) {
        if (!in_array($s[$i], $allowed_char)) {
            $errors += 1;
        }
    }

    return $errors . '/' . $length_string;
}






?>
