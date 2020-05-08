<?php
/*  95. Extract file name

    >You have to extract a portion of the file name as follows:
    Assume it will start with date represented as long number
    Followed by an underscore
    Youll have then a filename with an extension
    it will always have an extra extension at the end
    EXAMPLE:
        1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION     =>  FILE_NAME.EXTENSION
        1_This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34    =>  This_is_an_otherExample.mpg
        1231231223123131_myFile.tar.gz2     =>  myFile.tar
    NOTES:
*/


$dirtyFileName = "1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION";

$funzione = fileNameExtractor($dirtyFileName);
echo '<pre>';
print_r($funzione);
echo '</pre';



function fileNameExtractor($dirtyFileName) {
    $start = strpos($dirtyFileName, '_')+1;
    $first_dot = strpos($dirtyFileName, '.')+1;
    $second_dot = 0;

    for ($i = $first_dot; $i < strlen($dirtyFileName); $i++) {
        if ($dirtyFileName[$i] == '.') {
            $second_dot = $i;
            break;
        }
    }

    return substr($dirtyFileName, $start, $second_dot-$start);
}







?>
