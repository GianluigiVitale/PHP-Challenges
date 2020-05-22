<?php
/*  111. RGB To Hex Conversion

    >Create the rgb function so that passing in RGB decimal values will result in a hexadecimal representation
     being returned. Valid decimal values for RGB are 0 - 255.
     Any values that fall out of that range must be rounded to the closest valid value.
    EXAMPLE:
        rgb(255, 255, 255); // returns FFFFFF
        rgb(255, 255, 300); // returns FFFFFF
        rgb(0, 0, 0); // returns 000000
        rgb(148, 0, 211); // returns 9400D3
    NOTES:
        Your answer should always be 6 characters long, the shorthand with 3 will not work here.
*/


$r = 148;
$g = 0;
$b = 211;

$funzione = rgb($r,$g,$b);
echo '<pre>';
print_r($funzione);
echo '</pre';



function rgb($r,$g,$b) {
    if ($r > 255) {
        $r = 255;
    } elseif ($r < 0) {
        $r = 0;
    }

    if ($g > 255) {
        $g = 255;
    } elseif ($g < 0) {
        $g = 0;
    }

    if ($b > 255) {
        $b = 255;
    } elseif ($b < 0) {
        $b = 0;
    }

    $table = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];

    $one_digit = $table[floor($r / 16)];
    $two_digit = $table[($r / 16 - floor($r / 16)) * 16];
    $three_digit = $table[floor($g / 16)];
    $four_digit = $table[($g / 16 - floor($g / 16)) * 16];
    $five_digit = $table[floor($b / 16)];
    $six_digit = $table[($b / 16 - floor($b / 16)) * 16];

    return $one_digit . $two_digit . $three_digit . $four_digit . $five_digit . $six_digit;
}



?>
