<?php
/* 73. Count the smiley faces

    >Given an array (arr) as an argument create the function countSmileys that should return the total number of smiling faces.
     -Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
     -A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
     -Every smiling face must have a smiling mouth that should be marked with either ) or D.
     No additional characters are allowed except for those mentioned.
     Valid smiley face examples:
     :) :D ;-D :~)
     Invalid smiley faces:
     ;( :> :} :]
    EXAMPLE:
        countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
        countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
        countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1;
    NOTES:
        In case of an empty array return 0. You will not be tested with invalid input (input will always be an array).
        Order of the face (eyes, nose, mouth) elements will always be the same
*/


$arr = [':)',':(',':D',':O',':;'];
$arr = [':(',':D',':D',';-D',';(',':oD',';(',';-D'];
$arr = [':)', ';(', ';}', ':-D'];

$funzione = count_smileys($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';


function count_smileys($arr) {
    if (empty($arr)) {
        return 0;
    }

    $n_smiling = 0;
    foreach ($arr as $face) {
        $eye = substr_count($face, ';') + substr_count($face, ':');
        $mouth = substr_count($face, 'D') + substr_count($face, ')');
        // echo $eye . '<br>';
        // echo $mouth . '<br>';
        $allowed_char = true;

        if (strlen($face) == 3) {
            if ($face[1] != '-' && $face[1] != '~') {
                $allowed_char = false;
            }
        } elseif (strlen($face) > 3) {
            $allowed_char = false;
        }

        if ($eye == 1 && $mouth == 1 && $allowed_char) {
            $n_smiling += 1;
        }
    }

    return $n_smiling;
}



?>
