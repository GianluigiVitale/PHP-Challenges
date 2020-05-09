<?php
/*  96. Coordinates Validator

    >You need to create a function that will validate if given parameters are valid geographical coordinates.
    Latitude (which is first float) can be between 0 and 90, positive or negative.
    Longitude (which is second float) can be between 0 and 180, positive or negative.
    EXAMPLE:
        Here are some valid coordinates:
        -23, 25
        24.53525235, 23.45235
        04, -23.234235
        43.91343345, 143
        4, -3

        And some invalid ones:
        23.234, - 23.4234
        2342.43536, 34.324236
        N23.43345, E32.6457
        99.234, 12.324
        6.325624, 43.34345.345
        0, 1,2
        0.342q0832, 1.2324
    NOTES:
        There should be no space between the minus "-" sign and the digit after it.
        Coordinates can only contain digits, or one of the following symbols (including space after comma) __ -, . __
*/


$coordinates = "-23, 25";

$funzione = isValidCoordinates($coordinates);
echo $funzione ? 'true' : 'false';



function isValidCoordinates($coordinates) {
    $coordinates = strtolower($coordinates);

    $alphabet = range('a', 'z');

    for ($i = 0; $i < strlen($coordinates); $i++) { // if there are letters
        foreach ($alphabet as $letter) {
            if ($coordinates[$i] == $letter) {
                return false;
            }
        }
    }

    $arr = explode(' ', $coordinates);
    $first_n = floatval($arr[0]);
    $second_n = floatval($arr[1]);

    if (count($arr) > 2 || count($arr) < 2 || $first_n < -90 || $first_n > 90 || $second_n < -180 || $second_n > 180 || substr_count($coordinates, '.') > 2 || substr_count($coordinates, ',') != 1) {
        return false;
    }
    return true;
}







?>
