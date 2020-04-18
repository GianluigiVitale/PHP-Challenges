<?php
/* 24. Removing Elements

    >Take an array and remove every second element out of that array.
     Always keep the first element and start removing with the next element.
    EXAMPLE:
        $array = ['Keep', 'Remove', 'Keep', 'Remove', ...];
    NOTES:
        None of the arrays will be empty, so you don't have to worry about that!
*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$funzione = removeEveryOther($array);
echo '<pre>';
print_r($funzione);
echo '</pre';


function removeEveryOther($array) {
    $new_array = [];
    for ($i = 0; $i < count($array); $i+=2) {
        $new_array[] = $array[$i];
    }

    return $new_array;
}
?>
