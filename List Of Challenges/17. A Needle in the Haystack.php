<?php
/* 17. A Needle in the Haystack

    >Can you find the needle in the haystack?
    Write a function findNeedle() that takes an array full of junk but containing one "needle"
    After your function finds the needle it should return a message (as a string) that says:
    "found the needle at position " plus the index it found the needle, so:
    EXAMPLE:
        find_needle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
        should return "found the needle at position 5"
    NOTES:
*/

$haystack = ['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false];

$funzione = findNeedle($haystack);
echo '<pre>';
print_r($funzione);
echo '</pre';


function findNeedle($haystack) {
    if ($haystack === null) {
        return null;
    }

    $position_needle = array_search('needle', $haystack);   // since the keys of the array are equal to the normal index I can use array_search to get the position

    if ($position_needle) {
        return 'found the needle at position ' . $position_needle;
    }
}
?>
