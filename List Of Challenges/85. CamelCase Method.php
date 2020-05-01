<?php
/*  85. CamelCase Method

    >Write simple .camelCase method for strings.
     All words must have their first letter capitalized without spaces.
    EXAMPLE:
        camel_case("hello case"); // => "HelloCase"
        camel_case("camel case word"); // => "CamelCaseWord"
    NOTES:
*/


$s = "camel case method";

$funzione = camel_case($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function camel_case(string $s): string {
    return str_replace(' ', '', ucwords($s));
}





?>
