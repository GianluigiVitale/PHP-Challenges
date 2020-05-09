<?php
/*  100. Fruit Machine

    >Slot machine, informally fruit machine is a casino gambling machine with three
    or more reels which spin when a button is pushed.

    You will be given three reels of different images and told at which index the reels stop.
    From this information your job is to return the score of the resulted reels.
    Rules:
 	1. There are always exactly three reels
    2. Each reel has 10 different items.
    3. The three reel inputs may be different.
    4. The spin array represents the index of where the reels finish.
    5. The three spin inputs may be different
    6. Three of the same is worth more than two of the same
    7. Two of the same plus one "Wild" is double the score.
    8. No matching items returns 0.

    Scoring:
    Item    Three of the same   Two of the same     Two of the same plus one Wild
    Wild        100                 10                  N/A
    Star        90                  9                   18
    Bell        80                  8                   16
    Shell       70                  7                   14
    Seven       60                  6                   12
    Cherry      50                  5                   10
    Bar         40                  4                   8
    King        30                  3                   6
    Queen       20                  2                   4
    Jack        10                  1                   2

    Return an integer of the score.
    EXAMPLE:
        Initialise
        reel1 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
        reel2 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
        reel3 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
        spin = [5,5,5];

        result = fruit([reel1,reel2,reel3],spin);
        Scoring
        reel1[5] == "Cherry"
        reel2[5] == "Cherry"
        reel3[5] == "Cherry"

        Cherry + Cherry + Cherry == 50
    NOTES:
*/


$reel1 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$reel2 = ["Bar", "Wild", "Queen", "Bell", "King", "Seven", "Cherry", "Jack", "Star", "Shell"];
$reel3 = ["Bell", "King", "Wild", "Bar", "Seven", "Jack", "Shell", "Cherry", "Queen", "Star"];
$spin = [5,4,3];

$funzione = fruit([$reel1,$reel2,$reel3],$spin);
echo '<pre>';
print_r($funzione);
echo '</pre';



function fruit($reels, $spins) {
    $score = [
        "Wild" => 10,
        "Star" => 9,
        "Bell" => 8,
        "Shell" => 7,
        "Seven" => 6,
        "Cherry" => 5,
        "Bar" => 4,
        "King" => 3,
        "Queen" => 2,
        "Jack" => 1,
    ];

    $first = $reels[0][$spins[0]];
    $second = $reels[1][$spins[1]];
    $third = $reels[2][$spins[2]];

    if ($first == $second && $second == $third) {
        return $score[$first] * 10;
    } elseif ($first == $second) {
        if ($third == "Wild") {
            return $score[$first] * 2;
        } else {
            return $score[$first];
        }
    } elseif ($second == $third) {
        if ($first == "Wild") {
            return $score[$second] * 2;
        } else {
            return $score[$second];
        }
    } elseif ($third == $first) {
        if ($second == "Wild") {
            return $score[$third] * 2;
        } else {
            return $score[$third];
        }
    } elseif ($first != $second && $second != $third && $third != $first) {
        return 0;
    }
}







?>
