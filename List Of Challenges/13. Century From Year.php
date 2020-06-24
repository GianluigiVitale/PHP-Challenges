<?php
/* 13. Century From Year

    >The first century spans from the year 1 up to and including the year 100,
     The second - from the year 101 up to and including the year 200, etc.
     Given a year, return the century it is in.
    EXAMPLE:
        centuryFromYear(1705)  returns (18)
        centuryFromYear(1900)  returns (19)
        centuryFromYear(1601)  returns (17)
        centuryFromYear(2000)  returns (20)
    NOTES:
*/

$year = 50;

$funzione = centuryFromYear($year);
echo '<pre>';
print_r($funzione);
echo '</pre';


function centuryFromYear($year) {
    $year_to_string = strval($year);

    if ($year_to_string[strlen($year_to_string)-1] > 0 || $year_to_string[strlen($year_to_string)-2] > 0) { // if either the last digit or the one before is greater than 0

        return substr($year, 0, -2) + 1;        // I return all the digits but the last two plus one
    }

    return substr($year, 0, -2);
}
?>
