<?php
/* 8. Remove String Spaces

    >Simple, remove the spaces from the string, then return the resultant string.
    EXAMPLE:
    NOTES:
*/

$s = '8 j 8   mBliB8g  imjB8B8  jl  B';

$funzione = no_space($s);
echo '<pre>';
print_r($funzione);
echo '</pre';

function no_space(string $s): string {
    return str_replace(' ', '', $s);
}
?>
