<?php
/* 27. Find the Difference in Age between Oldest and Youngest Family Members

    >At the annual family gathering, the family likes to find the oldest living family member’s age
     and the youngest family member’s age and calculate the difference between them.
     You will be given an array of all the family members' ages, in any order.
     The ages will be given in whole numbers, so a baby of 5 months, will have an ascribed ‘age’ of 0.
     Return a new array (a tuple in Python) with [youngest age, oldest age, difference between the youngest and oldest age].
    EXAMPLE:
    NOTES:
*/

$ages = [82, 15, 6, 38, 35];

$funzione = differenceInAges($ages);
echo '<pre>';
print_r($funzione);
echo '</pre';


function differenceInAges($ages) {
    $youngest = $ages[0];
    $oldest = $ages[0];
    $difference_age = 0;

    foreach ($ages as $key => $value) {
        if ($value < $youngest) {
            $youngest = $value;
        } elseif ($value > $oldest) {
            $oldest = $value;
        }
    }
    $difference_age = $oldest - $youngest;

    return [$youngest, $oldest, $difference_age];
}
?>
