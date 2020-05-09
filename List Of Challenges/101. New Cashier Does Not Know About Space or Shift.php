<?php
/*  101. New Cashier Does Not Know About Space or Shift

    >Some new cashiers started to work at your restaurant.
    They are good at taking orders, but they don't know how to capitalize words, or use a space bar!
    All the orders they create look something like this:
    "milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza"

    The kitchen staff are threatening to quit, because of how difficult it is to read the orders.
    Their preference is to get the orders as a nice clean string with spaces and capitals like so:
    "Burger Fries Chicken Pizza Pizza Pizza Sandwich Milkshake Milkshake Coke"

    The kitchen staff expect the items to be in the same order as they appear in the menu.
    The menu items are fairly simple, there is no overlap in the names of the items:
    1. Burger
    2. Fries
    3. Chicken
    4. Pizza
    5. Sandwich
    6. Onionrings
    7. Milkshake
    8. Coke
    EXAMPLE:
    NOTES:
*/


$input = "milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza";
$input = "pizzachickenfriesburgercokemilkshakefriessandwich";

$funzione = getOrder($input);
echo '<pre>';
print_r($funzione);
echo '</pre';



function getOrder($input) {
    $phrase = str_replace(['burger', 'fries', 'chicken', 'pizza', 'sandwich', 'onionrings', 'milkshake', 'coke'],
                        ['1Burger ', '2Fries ', '3Chicken ', '4Pizza ', '5Sandwich ', '6Onionrings ', '7Milkshake ', '8Coke '], // added a number to sort it easily later
                        $input);

    $arr = explode(' ', $phrase);
    array_pop($arr);    // to remove the last space
    sort($arr);
    $new_orders = str_replace(['1','2','3','4','5','6','7','8'], '', implode(' ', $arr));   // to remove the numbers

    return $new_orders;
}







?>
