<?php
/*  99. Sum of Two Integers Without +-

    >Given Two integers a , b , find The sum of them , BUT You are not allowed to use the operators + and -
    EXAMPLE:
        1- Add (5,19) ==> return (24)
        2- Add (-27,18) ==> return (-9)
        3- Add (-14,-16) ==> return (-30)
    NOTES:
        The numbers (a,b) may be positive , negative values or zeros .
        Returning value will be an integer .
        the following functions are prohibited:
        array_sum, array_map, eval, exec, shell_exec, system, passthru,
        proc_*, popen, bc*, gmp_*.
        Additionally, calling functions using string interpolation is also banned,
        i.e. ("func")() or $obj->{"func"}().
*/


$x = 30;
$y = -90;

$funzione = add($x, $y);
echo '<pre>';
print_r($funzione);
echo '</pre';



function add($x, $y) {
    return round(log(pow(1.00000000000001, $x) * pow(1.00000000000001, $y), 1.00000000000001));
}







?>
