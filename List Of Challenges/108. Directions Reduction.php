<?php
/*  108. Directions Reduction

    >Once upon a time, on a way through the old wild mountainous west,…
    … a man was given directions to go from one point to another.
    The directions were "NORTH", "SOUTH", "WEST", "EAST". Clearly "NORTH" and "SOUTH" are opposite,
    "WEST" and "EAST" too.
    Going to one direction and coming back the opposite direction right away is a needless effort.
    Since this is the wild west, with dreadfull weather and not much water,
    it's important to save yourself some energy, otherwise you might die of thirst!

    Write a function dirReduc which will take an array of strings and returns an array of strings
    with the needless directions removed (W<->E or S<->N side by side).
    EXAMPLE:
        In ["NORTH", "EAST", "WEST", "SOUTH", "WEST", "WEST"], "NORTH" and "SOUTH" are not directly opposite
        but they become directly opposite after the reduction of "EAST" and "WEST"
        so the whole path is reducible to ["WEST", "WEST"].

        ["NORTH", "WEST", "SOUTH", "EAST"] is not reducible.

        ["NORTH", "SOUTH", "WEST", "EAST"] => []
    NOTES:
*/


$arr = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];

$funzione = dirReduc($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';



function dirReduc($arr) {
    $null = [
        'NORTH' => 'SOUTH',
        'SOUTH' => 'NORTH',
        'EAST' => 'WEST',
        'WEST' => 'EAST',
    ];

    $not_reduced = true;
    while ($not_reduced) {
        $useless = false;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $null[$arr[$i+1]]) {
                $useless = true;
                unset($arr[$i]);
                unset($arr[$i+1]);
                $arr = array_values($arr);
            }
        }

        if (!$useless) {
            $not_reduced = false;
        }
    }

    return $arr;
}







?>
