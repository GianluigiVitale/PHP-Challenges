<?php
/* 55. Decode the Morse code

    >In this kata you have to write a simple Morse code decoder.

    EXAMPLE:
        decode_morse('.... . -.--   .--- ..- -.. .')
        hould return "HEY JUDE"
    NOTES:
        Extra spaces before or after the code have no meaning and should be ignored.
*/

$code = '.... . -.--   .--- ..- -.. .';

$funzione = decode_morse($code);
echo '<pre>';
print_r($funzione);
echo '</pre';


function decode_morse(string $code): string {
    $morse_code_array = [
        "a"=>".-",
        "b"=>"-...",
        "c"=>"-.-.",
        "d"=>"-..",
        "e"=>".",
        "f"=>"..-.",
        "g"=>"--.",
        "h"=>"....",
        "i"=>"..",
        "j"=>".---",
        "k"=>"-.-",
        "l"=>".-..",
        "m"=>"--",
        "n"=>"-.",
        "o"=>"---",
        "p"=>".--.",
        "q"=>"--.-",
        "r"=>".-.",
        "s"=>"...",
        "t"=>"-",
        "u"=>"..-",
        "v"=>"...-",
        "w"=>".--",
        "x"=>"-..-",
        "y"=>"-.--",
        "z"=>"--..",
        "0"=>"-----",
        "1"=>".----",
        "2"=>"..---",
        "3"=>"...--",
        "4"=>"....-",
        "5"=>".....",
        "6"=>"-....",
        "7"=>"--...",
        "8"=>"---..",
        "9"=>"----.",
        "."=>".-.-.-",
        ","=>"--..--",
        "?"=>"..--..",
        "/"=>"-..-.",
        " "=>"",
        "sos"=>'...---...',
    ];

    if ($code[0] == ' ' && $code[strlen($code) - 1] == ' ') {
        $code = substr($code,1,-1);
    }
    $code = str_replace('  ',' ',$code);


    $array_morse_words = explode(' ', $code);

    $new_phrase = '';
    foreach ($array_morse_words as $key => $word) {
        foreach ($morse_code_array as $key2 => $code) {
            if ($code == $word) {
                $new_phrase .= $key2;
            }
        }
    }
    $phrase_definitive = strtoupper($new_phrase);


    return $phrase_definitive;
}




?>
