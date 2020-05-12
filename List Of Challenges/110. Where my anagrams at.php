<?php
/*  110. Where my anagrams at

    >What is an anagram? Well, two words are anagrams of each other if they both contain the same letters. For example:
    'abba' & 'baab' == true
    'abba' & 'bbaa' == true
    'abba' & 'abbba' == false
    'abba' & 'abca' == false
    Write a function that will find all the anagrams of a word from a list.
    You will be given two inputs a word and an array with words.
    You should return an array of all the anagrams or an empty array if there are none.
    EXAMPLE:
        anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']) => ['aabb', 'bbaa']
        anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']) => ['carer', 'racer']
        anagrams('laser', ['lazing', 'lazy',  'lacer']) => []
    NOTES:
*/


$word = 'racer';
$words = ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr'];

$funzione = anagrams($word, $words);
echo '<pre>';
print_r($funzione);
echo '</pre';



function anagrams($word, $words) {
    $char = count_chars($word, 1);
    $arr_anagram = [];

    foreach ($words as $k_word) {
        if (count_chars($k_word, 1) == $char) {
            $arr_anagram[] = $k_word;
        }
    }

    return $arr_anagram;
}
// alternative method
function anagrams($word, $words) {
    $word_sort = str_sort($word);

    $arr_anagram = [];
    foreach ($words as $k_word) {
        $k_word_sort = str_sort($k_word);
        if ($k_word_sort == $word_sort) {
            $arr_anagram[] = $k_word;
        }
    }

    return $arr_anagram;
}

function str_sort($word_to_sort) {
    $wd = str_split($word_to_sort);
    natsort($wd);
    $sorted_w = implode($wd);

    return $sorted_w;
}



?>
