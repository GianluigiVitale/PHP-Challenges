<?php
/* 66. Unique In Order

    >Implement the function unique_in_order which takes as argument a sequence and
     returns a list of items without any elements with the same value next to each other
     and preserving the original order of elements.
    EXAMPLE:
        uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
        uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
        uniqueInOrder([1,2,2,3,3])       == {1,2,3}
    NOTES:
*/


// $iterable = "AAAABBBCCDAABBB";
// $iterable = "ABBCcAD";
$iterable = [1,2,2,2,3];

$funzione = uniqueInOrder($iterable);
echo '<pre>';
print_r($funzione);
echo '</pre';


function uniqueInOrder($iterable) {
    if (empty($iterable)) {
        return [];
    }
    if (gettype($iterable) == 'array') {
        $iterable = implode('', $iterable);
    }

    $arr_unique = [];
    for ($i = 0; $i < strlen($iterable); $i++) {
        if ($iterable[$i] != $iterable[$i+1]) {
            $arr_unique[] = $iterable[$i];
        }
    }

    return $arr_unique;
}




?>
