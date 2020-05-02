<?php
/*  89. Length of missing array

    >You get an array of arrays.
    If you sort the arrays by their length, you will see, that their length-values are consecutive.
    But one array is missing!

    You have to write a method, that return the length of the missing array.
    EXAMPLE:
        [[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]] --> 3
    NOTES:
        If the array of arrays is null/nil or empty, the method should return 0.
        When an array in the array is null or empty, the method should return 0 too!
        There will always be a missing element and its length will be always between the given arrays.
*/


$arrayOfArrays = [
    [1, 2],
    [4, 5, 1, 1],
    [1],
    [5, 6, 7, 8, 9]
];

$funzione = getLengthOfMissingArray($arrayOfArrays);
echo '<pre>';
print_r($funzione);
echo '</pre';


function getLengthOfMissingArray($arrayOfArrays) {
    if ($arrayOfArrays === null || empty($arrayOfArrays)) {
        return 0;
    }
    foreach ($arrayOfArrays as $arr) {
        if ($arr === null || empty($arr)) {
            return 0;
        }
    }

    usort($arrayOfArrays, 'sortByLength');

    for ($i = 0; $i < count($arrayOfArrays); $i++) {
        if (count($arrayOfArrays[$i]) != count($arrayOfArrays[$i+1])+1 ) {
            return count($arrayOfArrays[$i])-1;
        }
    }
}

function sortByLength($a, $b) {     // function to sort an array in descending order based on sub array length
    return count($b) - count($a);
}




?>
