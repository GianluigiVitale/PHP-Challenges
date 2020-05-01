<?php
/* 75. Write Number in Expanded Form

    >You will be given a number and you will need to return it as a string in Expanded Form.
    EXAMPLE:
        expanded_form(12); // Should return "10 + 2"
        expanded_form(42); // Should return "40 + 2"
        expanded_form(70304); // Should return "70000 + 300 + 4"
    NOTES:
        All numbers will be whole numbers greater than 0.
*/


$n = 70304;

$funzione = expanded_form($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function expanded_form($n) {
    $n_s = strval($n);

    $numbers = [];
    for ($i = 0; $i < strlen($n_s); $i++) {
        if ($n_s[$i] != '0') {

            $number = '';
            $number .= $n_s[$i];

            $number_lng = strlen(substr($n_s, $i));
            for ($j = 1; $j < $number_lng; $j++) {
                $number .= '0';
            }
            $numbers[] = $number;
            $number = '';
        }
    }
    $str = implode(' + ', $numbers);

    return $str;
}





?>
