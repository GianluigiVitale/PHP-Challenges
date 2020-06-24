<?php
/* 9. Find the smallest integer in the array

    >Given an array of integers your solution should find the smallest integer.
    EXAMPLE:
        Given [34, 15, 88, 2] your solution will return 2
        Given [34, -345, -1, 100] your solution will return -345
    NOTES:
    You can assume, for the purpose of this kata, that the supplied array will not be empty.
*/

$arr = [3, 5, 10, 1, 4, 55];

$funzione = smallestInteger($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';


function smallestInteger($arr) {
    return min($arr);
}
// without using min
function smallestInteger($arr) {
    $smallest_number = $arr[0];

    foreach ($arr as $num) {
        if ($num < $smallest_number) {
            $smallest_number = $num;
        }
    }

    return $smallest_number;
}
?>
