<?php
/*  23. Expressions Matter

    >Given three integers a ,b ,c, return the largest number obtained after inserting the
     following operators and brackets: +, *, ()
     In other words , try every combination of a,b,c with [*+()] , and return the Maximum Obtained
    Notes:  The numbers are always positive.
            The numbers are in the range (1  ≤  a, b, c  ≤  10).
            You can use the same operation more than once.
            It's not necessary to place all the signs and brackets.
            Repetition in numbers may occur .
            You cannot swap the operands. For instance, in the example below you cannot get expression (1 + 3) * 2 = 8.
    Example:
    With the numbers 1, 2 and 3 , here are some ways of placing signs and brackets:
        1 * (2 + 3) = 5
        1 * 2 * 3 = 6
        1 + 2 * 3 = 7
        (1 + 2) * 3 = 9
    So the maximum value that you can obtain is 9.
*/

$a = 2;
$b = 1;
$c = 2;

$funzione = expressionMatter($a, $b, $c);
echo '<pre>';
print_r($funzione);
echo '</pre';


function expressionMatter($a, $b, $c) {
    $maximum_number = 0;

    $tries = [
        '1' => $a + $b + $c,
        '2' => $a * $b * $c,
        '3' => $a * $b + $c,
        '4' => $a + $b * $c,
        '5' => ($a + $b) * $c,
        '6' => $a * ($b + $c),
    ];

    foreach ($tries as $num) {
        if ($num > $maximum_number) {
            $maximum_number = $num;
        }
    }

    return $maximum_number;
}
?>
