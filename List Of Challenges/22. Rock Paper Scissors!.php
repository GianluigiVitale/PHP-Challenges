<?php
/* 22. Rock Paper Scissors!

    >Let's play! You have to return which player won! In case of a draw return Draw!.
    EXAMPLE:
    rps('scissors','paper') // Player 1 won!
    rps('scissors','rock') // Player 2 won!
    rps('paper','paper') // Draw!
    NOTES:
        http://i.imgur.com/aimOQVX.png
*/

$p1 = 'rock';
$p2 = 'rock';

$funzione = rpc($p1, $p2);
echo '<pre>';
print_r($funzione);
echo '</pre';


function rpc($p1, $p2) {
    if ($p1 == $p2) {
        return 'Draw!';
    }

    if ($p1 == 'rock' && $p2 == 'scissors' ||
        $p1 == 'scissors' && $p2 == 'paper' ||
        $p1 === 'paper' && $p2 === 'rock') {
        return 'Player 1 won!';
    } else {
        return 'Player 2 won!';
    }
}
?>
