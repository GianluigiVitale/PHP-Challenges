<?php
/*  90. Maze Runner

    >Welcome Adventurer. Your aim is to navigate the maze and reach the finish point without touching any walls.
     Doing so will kill you instantly!
     You will be given a 2D array of the maze and an array of directions.
     Your task is to follow the directions given. If you reach the end point before all your moves have gone,
     you should return Finish. If you hit any walls or go outside the maze border, you should return Dead.
     If you find yourself still in the maze after using all the moves, you should return Lost.
    EXAMPLE:
        The Maze array will look like
        maze = [[1,1,1,1,1,1,1],
                [1,0,0,0,0,0,3],
                [1,0,1,0,1,0,1],
                [0,0,1,0,0,0,1],
                [1,0,1,0,1,0,1],
                [1,0,0,0,0,0,1],
                [1,2,1,0,1,0,1]]

        ..with the following key
     	0 = Safe place to walk
        1 = Wall
        2 = Start Point
        3 = Finish Point

        direction = ["N","N","N","N","N","E","E","E","E","E"] == "Finish"
    NOTES:
        1. The Maze array will always be square i.e. N x N but its size and content will alter from test to test.
        2. The start and finish positions will change for the final tests.
        3. The directions array will always be in upper case and will be in the format of N = North,
            E = East, W = West and S = South.
*/


$maze = [
    [1,1,1,1,1,1,1],
    [1,0,0,0,0,0,3],
    [1,0,1,0,1,0,1],
    [0,0,1,0,0,0,1],
    [1,0,1,0,1,0,1],
    [1,0,0,0,0,0,1],
    [1,2,1,0,1,0,1]
];
$directions = ["N","N","N","N","N","E","E","E","E","E"];

$funzione = maze_runner($maze, $directions);
echo '<pre>';
print_r($funzione);
echo '</pre';


function maze_runner($maze, $directions) {
    // i find the start position (number 2) and push in $start_number the array and the index to use it later
    $start_number = [];
    foreach ($maze as $key => $sub_maze) {
        foreach ($sub_maze as $key2 => $position) {
            if ($position == 2) {
                $start_number[] = $key;
                $start_number[] = $key2;
            }
        }
    }

    for ($i = 0; $i < count($directions); $i++) {
        switch ($directions[$i]) {
            case 'N':
                $start_number[0] -= 1;
                break;
            case 'E':
                $start_number[1] += 1;
                break;
            case 'S':
                $start_number[0] += 1;
                break;
            case 'W':
                $start_number[1] -= 1;
                break;
        }

        $position = $maze[$start_number[0]][$start_number[1]];
        if ($position == 1 || $position === null) {
            return 'Dead';
        } elseif ($position == 3) {
            return 'Finish';
        }
    }

    return 'Lost';
}







?>
