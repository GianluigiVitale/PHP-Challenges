<?php
/*  83. IP Validation

    >Write an algorithm that will identify valid IPv4 addresses in dot-decimal format.
     IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.
     Input to the function is guaranteed to be a single string.
    EXAMPLE:
        Valid inputs:
        1.2.3.4
        123.45.67.89

        Invalid inputs:
        1.2.3
        1.2.3.4.5
        123.456.78.90
        123.045.067.089
    NOTES:
        Note that leading zeros (e.g. 01.02.03.04) are considered invalid.
*/


$str = 'adb.255.255.255';
$str = '21.129.168.66';
// $str = 'abc.def.ghi.jkl';

$funzione = isValidIP($str);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function isValidIP($str) {
    $arr = explode('.', $str);
    
    if (count($arr) != 4 || substr_count($str, ' ') > 0) {
        return false;
    }

    foreach ($arr as $num) {
        if (!is_numeric($num) || $num < 0 || $num > 255) {
            return false;
        }
    }

    return true;
}








?>
