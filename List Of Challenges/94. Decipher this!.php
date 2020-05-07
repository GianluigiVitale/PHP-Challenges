<?php
/*  94. Decipher this!

    >You are given a secret message you need to decipher. Here are the things you need to know to decipher it:
    For each word:
    the second and the last letter is switched (e.g. Hello becomes Holle)
    the first letter is replaced by its character code (e.g. H becomes 72)
    EXAMPLE:
        decipherThis('72olle 103doo 100ya'); // 'Hello good day'
        decipherThis('82yade 115te 103o'); // 'Ready set go'
    NOTES:
        There are no special characters used, only letters and spaces
*/


$str = '72olle 103doo 100ya';

$funzione = decipherThis($str);
echo '<pre>';
print_r($funzione);
echo '</pre';



function decipherThis($str) {
    $arr = explode(' ', $str);

    $new_arr = [];
    foreach ($arr as $word) {
        $remaining = str_replace(strval(intval($word)), '', $word);     // remove the number from the word
        if (empty($remaining)) {    // if the word is just a letter
            $new_arr[] = chr(intval($word));
        } else {
            $second_letter = $remaining[0];
            $last_letter = $remaining[strlen($remaining)-1];

            $remaining[0] = ' ';
            $remaining[strlen($remaining)-1] = ' ';

            if (strlen($remaining) != 1) {  // if there is not just a letter in $remaining
                $new_arr[] = str_replace(' ', '', chr(intval($word)) . $last_letter . $remaining . $second_letter);
            } else {
                $new_arr[] = str_replace(' ', '', chr(intval($word)) . $last_letter . $remaining);
            }
        }
    }

    return implode(' ', $new_arr);
}




?>
