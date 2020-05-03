<?php
    // 8kyu
//-----------------------------------------------------------------------------------------------------
    /* 1. Multiply

        >Given two integers multiply them and return the result
        EXAMPLE:
        NOTES:
    */

$a = 5;
$b = 8;

$funzione = multiply($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function multiply($a, $b) {
    return $a * $b;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 2. Even or Odd

        >Create a function that takes an integer as an argument and returns "Even" for even numbers
         or "Odd" for odd numbers.
        EXAMPLE:
        NOTES:
    */

$n = 2;

$funzione = even_or_odd($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function even_or_odd(int $n): string {
    if ($n % 2 == 0) {
        return 'Even';
    } else {
        return 'Odd';
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 3. Sum of positive

        >You get an array of numbers, return the sum of all of the positives ones.
        EXAMPLE:
            [1,-4,7,12] => 1 + 7 + 12 = 20
        NOTES:
            if there is nothing to sum, the sum is default to 0.
    */

$arr = [-1, 2, 3, 4, -5];

$funzione = positive_sum($arr);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function positive_sum($arr) {
    if (empty($arr)) {
        return 0;
    } else {
        $sum = 0;
        foreach ($arr as $key => $value) {
            if ($value > 0) {
                $sum += $value;
            }
        }

        return $sum;
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 4. Opposite number

        >Very simple, given a number, find its opposite.
        EXAMPLE:
            1: -1
            14: -14
            -34: 34
        NOTES:
    */

$n = 14;

$funzione = opposite($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function opposite($n) {
    return $n * -1;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 5. Remove First and Last Character

        >Your goal is to create a function that removes the first and last characters of a string.
         You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
        EXAMPLE:
        NOTES:
    */

$s = 'place';

$funzione = remove_char($s);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function remove_char(string $s): string {
    return substr($s, 1, -1);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 6. Return Negative

        >In this simple assignment you are given a number and have to make it negative.
         But maybe the number is already negative?
        EXAMPLE:
            makeNegative(1)    // return -1
            makeNegative(-5)   // return -5
            makeNegative(0)    // return 0
            makeNegative(0.12) // return -0.12
        NOTES:
            The number can be negative already, in which case no change is required.
        Zero (0) is not checked for any specific sign. Negative zeros make no mathematical sense.
    */

$num = -20;

$funzione = makeNegative($num);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function makeNegative(float $num) : float {
    if ($num <= 0) {
        return $num;
    }

    return $num * -1;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 7. String repeat

        >Write a function called repeatString which repeats the given String src exactly count times.
        EXAMPLE:
            repeatStr(6, "I") // "IIIIII"
            repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"
        NOTES:
    */

$n = 3;
$str = '*';

$funzione = repeatStr($n, $str);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function repeatStr($n, $str)
{
    $new_string = '';
    for ($i = 1; $i <= $n; $i++) {
        $new_string .= $str;
    }

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 8. Remove String Spaces

        >Simple, remove the spaces from the string, then return the resultant string.
        EXAMPLE:
        NOTES:
    */

$s = '8 j 8   mBliB8g  imjB8B8  jl  B';

$funzione = no_space($s);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function no_space(string $s): string {
    return str_replace(' ', '', $s);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 9. Find the smallest integer in the array

        >Given an array of integers your solution should find the smallest integer.
        EXAMPLE:
            Given [34, 15, 88, 2] your solution will return 2
            Given [34, -345, -1, 100] your solution will return -345
        NOTES:
        You can assume, for the purpose of this kata, that the supplied array will not be empty.
    */

$arr = [3, 5, 10, 1, 4, 55];

$funzione = smallestInteger($arr);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function smallestInteger($arr) {
    $smallest_number = $arr[0];

    foreach ($arr as $key => $value) {
        if ($value < $smallest_number) {
            $smallest_number = $value;
        }
    }

    return $smallest_number;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 10. Grasshopper - Summation

        >Write a program that finds the summation of every number from 1 to num.
         The number will always be a positive integer greater than 0.
        EXAMPLE:
            summation(2) -> 3
            1 + 2
            summation(8) -> 36
            1 + 2 + 3 + 4 + 5 + 6 + 7 + 8
        NOTES:
    */

$n = 8;

$funzione = summation($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function summation($n) {
    $sum = 0;

    for ($i = $n; $i >= 1; $i--) {
        $sum += $i;
    }

    return $sum;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 11. Convert boolean values to strings 'Yes' or 'No'.

        >Write a function that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
        EXAMPLE:
        NOTES:
    */

$bool = true;

$funzione = boolToWord($bool);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function boolToWord($bool) {
    if ($bool === true) {
        return 'Yes';
    }

    return 'No';
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 12. Reversed Strings

        >Write a function so that it reverses the string value passed into it.
        EXAMPLE:
        NOTES:
    */

$str = 'world';

$funzione = solution($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function solution($str) {
    return strrev($str);
}
function solution($str) {   // another way
    $reversed_string = '';

    for ($i = strlen($str); $i >= 0; $i--) {
        $reversed_string .= $str[$i];
    }

    return $reversed_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 13. Century From Year

        >The first century spans from the year 1 up to and including the year 100,
         The second - from the year 101 up to and including the year 200, etc.
         Given a year, return the century it is in.
        EXAMPLE:
            centuryFromYear(1705)  returns (18)
            centuryFromYear(1900)  returns (19)
            centuryFromYear(1601)  returns (17)
            centuryFromYear(2000)  returns (20)
        NOTES:
    */

$year = 50;

$funzione = centuryFromYear($year);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function centuryFromYear($year)
{
    $year_to_string = strval($year);

    if ($year_to_string[strlen($year_to_string)-1] > 0 || $year_to_string[strlen($year_to_string)-2] > 0) { // if either the last digit or the one before is greater than 0
        $number_minus_2digits = substr($year, 0, -2);
        $century = $number_minus_2digits += 1;

        return $century;
    }

    return substr($year, 0, -2);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 14. Basic Mathematical Operations


        >Your task is to create a function that does four basic mathematical operations.
        The function should take three arguments - operation(string/char), value1(number), value2(number).
        The function should return result of numbers after applying the chosen operation.
        EXAMPLE:
            basicOp('+', 4, 7)         // Output: 11
            basicOp('-', 15, 18)       // Output: -3
            basicOp('*', 5, 5)         // Output: 25
            basicOp('/', 49, 7)        // Output: 7
        NOTES:
    */

$op = '*';
$val1 = 4;
$val2 = 7;

$funzione = basicOp($op, $val1, $val2);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function basicOp($op, $val1, $val2)
{
    switch ($op) {
        case '*':
            return $val1 * $val2;
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '/':
            return $val1 / $val2;
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 15. Convert a Number to a String!


        >We need a function that can transform a number into a string.
        What ways of achieving this do you know?
        EXAMPLE:
            numberToString(123); // returns '123';`
            numberToString(999); // returns '999';`
        NOTES:
    */

$num = 4;

$funzione = numberToString($num);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function numberToString($num)
{
    return strval($num);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 16. Count of positives - sum of negatives

        >Given an array of integers.
        Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
        If the input array is empty or null, return an empty array.
        EXAMPLE:
            For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
        NOTES:
    */

$input = [0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14];

$funzione = countPositivesSumNegatives($input);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function countPositivesSumNegatives($input) {
    if (empty($input)) {
        return [];
    }

    $count_positive = 0;
    $sum_negative = 0;
    foreach ($input as $key => $value) {
        if ($value > 0) {
            $count_positive += 1;
        } else {
            $sum_negative += $value;
        }
    }

    return [$count_positive, $sum_negative];
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 17. A Needle in the Haystack

        >Can you find the needle in the haystack?
        Write a function findNeedle() that takes an array full of junk but containing one "needle"
        After your function finds the needle it should return a message (as a string) that says:
        "found the needle at position " plus the index it found the needle, so:
        EXAMPLE:
            find_needle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
            should return "found the needle at position 5"
        NOTES:
    */

$haystack = ['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false];

$funzione = findNeedle($haystack);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function findNeedle($haystack) {
    if ($haystack === null) {
        return null;
    }

    $position_needle = array_search('needle', $haystack);   // since the keys of the array are equal to the normal index I can use array_search to get the position

    if ($position_needle) {
        return 'found the needle at position ' . $position_needle;
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 18. Square(n) Sum

        >Create a funciton so that it squares each number passed into it and then sums the results together.
        EXAMPLE:
            given [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
        NOTES:
    */

$numbers = [0, 3, 4, 5];

$funzione = square_sum($numbers);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function square_sum($numbers) : int {
    $square_sum = 0;
    foreach ($numbers as $key => $value) {
        $square_sum += pow($value, 2);
    }

    return $square_sum;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 19. Keep Hydrated!

        >Nathan loves cycling.
        Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
        You get given the time in hours and you need to return the number of litres Nathan will drink, rounded to the smallest value.
        EXAMPLE:
            time = 3 ----> litres = 1
            time = 6.7---> litres = 3
            time = 11.8--> litres = 5
        NOTES:
    */

$t = 11.8;

$funzione = litres($t);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function litres($t) {
    return floor($t * 0.5);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 20. Beginner - Lost Without a Map

        >Given an array of integers, return a new array with each value doubled.

        EXAMPLE:
            [1, 2, 3] --> [2, 4, 6]
        NOTES:
    */

$x = [4, 1, 1, 1, 4];

$funzione = maps($x);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function maps($x)
{
    $array_doubled = [];
    foreach ($x as $key => $value) {
        $array_doubled[] = $value * 2;
    }

    return $array_doubled;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 21. Convert a String to a Number!

        >We need a function that can transform a string into a number. What ways of achieving this do you know?
        EXAMPLE:
            stringToNumber("1234") === 1234
            stringToNumber("605" ) === 605
            stringToNumber("1405") === 1405
            stringToNumber("-7"  ) === -7
        NOTES:
            Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.

    */

$str = '1234';

$funzione = stringToNumber($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function stringToNumber($str) {
    return (int)$str;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
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
echo '</pre>';


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
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /*  23. Expressions Matter

        >Given three integers a ,b ,c, return the largest number obtained after inserting the
         following operators and brackets: +, *, ()
         In other words , try every combination of a,b,c with [*+()] , and return the Maximum Obtained
        Notes:  The numbers are always positive.
                The numbers are in the range (1  ≤  a, b, c  ≤  10).
                You can use the same operation more than once.
                It's not necessary to place all the signs and brackets.
                Repetition in numbers may occur .
                You cannot swap the operands. For instance, in the example below you cannot get expression (1 + 3) * 2 = 8.
        Example:
        With the numbers 1, 2 and 3 , here are some ways of placing signs and brackets:
            1 * (2 + 3) = 5
            1 * 2 * 3 = 6
            1 + 2 * 3 = 7
            (1 + 2) * 3 = 9
        So the maximum value that you can obtain is 9.
    */

$a = 2;
$b = 1;
$c = 2;

$funzione = expressionMatter($a, $b, $c);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function expressionMatter($a, $b, $c) {
    $maximum_number = 0;

    $tries = [
        '1' => $a + $b + $c,
        '2' => $a * $b * $c,
        '3' => $a * $b + $c,
        '4' => $a + $b * $c,
        '5' => ($a + $b) * $c,
        '6' => $a * ($b + $c),
    ];

    foreach ($tries as $key => $value) {
        if ($value > $maximum_number) {
            $maximum_number = $value;
        }
    }

    return $maximum_number;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 24. Removing Elements

        >Take an array and remove every second element out of that array.
         Always keep the first element and start removing with the next element.
        EXAMPLE:
            $array = ['Keep', 'Remove', 'Keep', 'Remove', ...];
        NOTES:
            None of the arrays will be empty, so you don't have to worry about that!
    */

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$funzione = removeEveryOther($array);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function removeEveryOther($array) {
    $new_array = [];
    for ($i = 0; $i < count($array); $i+=2) {
        $new_array[] = $array[$i];
    }

    return $new_array;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 25. Number of characters

        >Create a function called that accepts 2 string arguments
            and returns an integer of the count of occurrences the 2nd argument is found in the first one.
            If no occurrences can be found, a count of 0 should be returned.
        EXAMPLE:
            strCount('Hello', 'o') // => 1
            strCount('Hello', 'l') // => 2
            strCount('', 'z')      // => 0
        NOTES:
            The first argument can be an empty string
            The second string argument will always be of length 1
    */

$str = 'Hello';
$letter = 'o';

$funzione = strCount($str, $letter);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function strCount($str, $letter) {
    return substr_count($str, $letter);
}
function strCount($str, $letter) {  // another way
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $letter) {
            $count++;
        }
    }

    return $count;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 26. Is the string uppercase

        >Create a method is_uppercase() to see whether the string is ALL CAPS. For example:
        EXAMPLE:
            is_uppercase("c") == false
            is_uppercase("C") == true
            is_uppercase("hello I AM DONALD") == false
            is_uppercase("HELLO I AM DONALD") == true
            is_uppercase("ACSKLDFJSgSKLDFJSKLDFJ") == false
            is_uppercase("ACSKLDFJSGSKLDFJSKLDFJ") == true
        NOTES:
            In this Kata, a string is said to be in ALL CAPS whenever it does not contain any lowercase letter
             so any string containing no letters at all is trivially considered to be in ALL CAPS.
    */

$str = 'Hello';

$funzione = is_uppercase($str);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function is_uppercase($str) {
    if (strtoupper($str) == $str) {
        return true;
    }
    return false;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 27. Find the Difference in Age between Oldest and Youngest Family Members

        >At the annual family gathering, the family likes to find the oldest living family member’s age
         and the youngest family member’s age and calculate the difference between them.
         You will be given an array of all the family members' ages, in any order.
         The ages will be given in whole numbers, so a baby of 5 months, will have an ascribed ‘age’ of 0.
         Return a new array (a tuple in Python) with [youngest age, oldest age, difference between the youngest and oldest age].
        EXAMPLE:
        NOTES:
    */

$ages = [82, 15, 6, 38, 35];

$funzione = differenceInAges($ages);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function differenceInAges($ages) {
    $youngest = $ages[0];
    $oldest = $ages[0];
    $difference_age = 0;

    foreach ($ages as $key => $value) {
        if ($value < $youngest) {
            $youngest = $value;
        } elseif ($value > $oldest) {
            $oldest = $value;
        }
    }
    $difference_age = $oldest - $youngest;

    return [$youngest, $oldest, $difference_age];
}
//-----------------------------------------------------------------------------------------------------

    // 7kyu

//-----------------------------------------------------------------------------------------------------
    /* 28. Vowel Count

        >Return the number (count) of vowels in the given string.
        We will consider a, e, i, o, and u as vowels for this Kata.
        The input string will only consist of lower case letters and/or spaces.
        EXAMPLE:
        NOTES:
    */

$str = 'abracadabra';

$funzione = getCount($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    foreach ($vowels as $key => $value) {
        $vowelsCount += substr_count($str, $value);
    }

    return $vowelsCount;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 29. Mumbling

        >This time no story, no theory. The examples below show you how to write function accum:
        EXAMPLE:
            accum("abcd") -> "A-Bb-Ccc-Dddd"
            accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
            accum("cwAt") -> "C-Ww-Aaa-Tttt"
        NOTES:
            The parameter of accum is a string which includes only letters from a..z and A..Z.
    */

$s = 'ZpglnRxqenU';

$funzione = accum($s);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function accum($s) {
    $new_string = '';

    for ($i = 0; $i < strlen($s); $i++) {
        $new_string .= strtoupper($s[$i]);

        for ($j = 0; $j < $i; $j++) {   // to add as many char as the index of the char - 1 (-1 because the first uppercase char is already added)
            $new_string .= strtolower($s[$i]);
        }

        if ($i < strlen($s) - 1) { // if it's the last word don't add '-'
            $new_string .= '-';
        }
    }

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 30. Get the Middle Character

        >You are going to be given a word. Your job is to return the middle character of the word.
         If the word's length is odd, return the middle character.
         If the word's length is even, return the middle 2 characters.
        EXAMPLE:
            Kata.getMiddle("test") should return "es"
            Kata.getMiddle("testing") should return "t"
            Kata.getMiddle("middle") should return "dd"
            Kata.getMiddle("A") should return "A"
        NOTES:
    */

$text = 'testing';

$funzione = getMiddle($text);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function getMiddle($text) {
    $middle_char = '';

    if (strlen($text) % 2 == 0) {
        $middle_char = $text[strlen($text) / 2 - 1] . $text[strlen($text) / 2];
    } else {
        $middle_char = $text[floor(strlen($text) / 2)];
    }

    return $middle_char;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 31. Highest and Lowest

        >In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.
        EXAMPLE:
            highAndLow("1 2 3 4 5");  // return "5 1"
            highAndLow("1 2 -3 4 5"); // return "5 -3"
            highAndLow("1 9 3 4 -5"); // return "9 -5"
        NOTES:
            All numbers are valid Int32, no need to validate them.
            There will always be at least one number in the input string.
            Output string must be two numbers separated by a single space, and highest number is first.
    */

$numbers = "8 3 -5 42 -1 0 0 -9 4 7 4 -4";

$funzione = highAndLow($numbers);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function highAndLow($numbers)
{
    $array = explode(' ', $numbers);
    $max_number = max($array);
    $min_number = min($array);

    return $max_number . ' ' . $min_number;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 32. Descending Order

        >Your task is to make a function that can take any non-negative integer as a argument
         and return it with its digits in descending order.
          Essentially, rearrange the digits to create the highest possible number.
        EXAMPLE:
            Input: 21445 Output: 54421
            Input: 145263 Output: 654321
            Input: 123456789 Output: 987654321
        NOTES:
    */

$n = 3024;

$funzione = descendingOrder($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function descendingOrder(int $n): int {
    $string_array = str_split($n);
    rsort($string_array);

    $string_sorted = implode('', $string_array);

    return (int)$string_sorted;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 33. Shortest Word

        >Simple, given a string of words, return the length of the shortest word(s).
        String will never be empty and you do not need to account for different data types.
        EXAMPLE:
        NOTES:
    */

$str = 'turns out random test cases are easier than writing out basic ones';

$funzione = findShort($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function findShort($str) {
    $array_str = explode(' ', $str);

    $shortest_word = $array_str[0];
    foreach ($array_str as $key => $value) {
        if (strlen($value) < strlen($shortest_word)) {
            $shortest_word = $value;
        }
    }

    return strlen($shortest_word);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 34. Exes and Ohs

        >Check to see if a string has the same amount of 'x's and 'o's.
        The method must return a boolean and be case insensitive. The string can contain any char.
        EXAMPLE:
            XO("ooxx") => true
            XO("xooxx") => false
            XO("ooxXm") => true
            XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
            XO("zzoo") => false
        NOTES:
    */

$s = 'xxxoo';

$funzione = XO($s);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function XO($s) {
    $s_lowercase = strtolower($s);

    $x_count = substr_count($s_lowercase, 'x');
    $o_count = substr_count($s_lowercase, 'o');

    if ($x_count == 0 && $o_count == 0 || $x_count == $o_count) {
        return true;
    }
    return false;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 35. Isograms

        >An isogram is a word that has no repeating letters, consecutive or non-consecutive.
         Implement a function that determines whether a string that contains only letters is an isogram.
          Assume the empty string is an isogram. Ignore letter case.
        EXAMPLE:
            isIsogram "Dermatoglyphics" == true
            isIsogram "aba" == false
            isIsogram "moOse" == false -- ignore letter case
        NOTES:
    */

$string = 'Dermatoglyphics';

$funzione = isIsogram($string);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function isIsogram($string) {
    $string_lowercase = strtolower($string);

    for ($i = 0; $i < strlen($string); $i++) {
        $char_count = substr_count($string_lowercase, $string[$i]);
        if ($char_count > 1) {
            return false;
        }
    }

    return true;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 36. Capitalize Each Word

        >Write a function that capitalize each word
        EXAMPLE:
            "How can mirrors be real if our eyes aren't real"
            "How Can Mirrors Be Real If Our Eyes Aren't Real"
        NOTES:
    */

$string = 'How can mirrors be real if our eyes aren\'t real';

$funzione = capitalize($string);
echo '<pre>';
print_r($funzione);
echo '</pre>';

function capitalize($string)
{
    return ucwords($string);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 37. Growth of a Population

        >In a small town the population is p0 = 1000 at the beginning of a year.
         The population regularly increases by 2 percent per year and
         moreover 50 new inhabitants per year come to live in the town.
         How many years does the town need to see its population greater or equal to p = 1200 inhabitants?
         More generally given parameters:
         p0, percent, aug (inhabitants coming or leaving each year), p (population to surpass)
         the function nb_year should return n number of entire years needed to get a population greater or equal to p.
        EXAMPLE:
            At the end of the first year there will be:
            1000 + 1000 * 0.02 + 50 => 1070 inhabitants

            At the end of the 2nd year there will be:
            1070 + 1070 * 0.02 + 50 => 1141 inhabitants (number of inhabitants is an integer)

            At the end of the 3rd year there will be:
            1141 + 1141 * 0.02 + 50 => 1213

            It will need 3 entire years.
        NOTES:
            aug is an integer, percent a positive or null number, p0 and p are positive integers (> 0)
    */

$p0 = 1500;
$percent = 5;
$aug = 100;
$p = 5000;

$funzione = nbYear($p0, $percent, $aug, $p);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function nbYear($p0, $percent, $aug, $p) {

    $i = 0;
    while ($p0 < $p) {
        $p0 = $p0 * (1 + $percent / 100) + $aug;

        $i++;
    }

    return $i;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 38. Complementary DNA

        >In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G".
         You have function with one side of the DNA (string, except for Haskell);
         you need to get the other complementary side.
         DNA strand is never empty or there is no DNA at all (again, except for Haskell).
         So for the character G you have to change it to C, C becomes G, A becomes T and T becomes A
        EXAMPLE:
            DNA_strand("ATTGC") // returns "TAACG"
            DNA_strand("GTAT") // returns "CATA"
        NOTES:
    */

$dna = "TTTT";

$funzione = DNA_strand($dna);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function DNA_strand($dna) {
    $new_string = '';
    for ($i = 0; $i < strlen($dna); $i++) {
        if ($dna[$i] == 'T') {
            $new_string .= 'A';
        } elseif ($dna[$i] == 'A') {
            $new_string .= 'T';
        } elseif ($dna[$i] == 'C') {
            $new_string .= 'G';
        } elseif ($dna[$i] == 'G') {
            $new_string .= 'C';
        }
    }

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 39. Two to One

        >Take 2 strings s1 and s2 including only letters from ato z.
         Return a new sorted string, the longest possible, containing distinct letters,
         each taken only once - coming from s1 or s2.
        EXAMPLE:
            a = "xyaabbbccccdefww"
            b = "xxxxyyyyabklmopq"
            longest(a, b) -> "abcdefklmopqwxy"
            a = "abcdefghijklmnopqrstuvwxyz"
            longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
        NOTES:
    */

$a = "aretheyhere";
$b = "yestheyarehere";

$funzione = longest($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function longest($a, $b) {
    $array = array_unique(str_split($a.$b));
    sort($array);

    return implode('', $array);
}
// another solution
function longest($a, $b) {
    $total_string = $a + $b;
    $new_string = '';
    for ($i = 0; $i < strlen($total_string); $i++) {
        if (!strpos($new_string, $total_string[$i])) {
            $new_string .= $total_string[$i];
        }
    }

    $array = str_split($new_string);
    sort($array);
    $string_sorted = implode('', $array);

    return $string_sorted;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 40. Sum of odd numbers

    >Given the triangle of consecutive odd numbers:
                        1
                     3     5
                  7     9    11
              13    15    17    19
           21    23    25    27    29
           ...
           Calculate the row sums of this triangle from the row index (starting at index 1) e.g.:
    EXAMPLE:
        rowSumOddNumbers(1); // 1
        rowSumOddNumbers(2); // 3 + 5 = 8
    NOTES:
*/

$n = 1;

$funzione = rowSumOddNumbers($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function rowSumOddNumbers($n) {
    return pow($n, 3);
}
// another solution
function rowSumOddNumbers($n) {
    if ($n == 1) {
        return 1;
    }

    $number_of_oddNumber = 0;
    for ($i = $n - 1; $i > 0; $i--) {   // I find how many odd numbers there are before the row $n
        $number_of_oddNumber += $i;
    }

    $last_odd_number = 1;
    for ($i = 1; $i < $number_of_oddNumber; $i++) {     // I get the last odd number before the row $n
        $last_odd_number += 2;
    }

    $odd_numbers_rowN = 0;
    for ($i = 0; $i < $n; $i++) {   // I get the sum of the numbers of the row $n
        $last_odd_number += 2;
        $odd_numbers_rowN += $last_odd_number;
    }

    return $odd_numbers_rowN;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 41. Printer Errors

    >In a factory a printer prints labels for boxes. For one kind of boxes the printer has to use colors which,
     for the sake of simplicity, are named with letters from a to m.

    The colors used by the printer are recorded in a control string.
     For example a "good" control string would be aaabbbbhaijjjm meaning that the printer used three times color a,
     four times color b, one time color h then one time color a...

    Sometimes there are problems: lack of colors, technical malfunction and a "bad" control string is produced
     e.g. aaaxbbbbyyhwawiwjjjwwm with letters not from a to m.

    You have to write a function printer_error which given a string will output the error rate of the printer
     as a string representing a rational whose numerator is the number of errors and
     the denominator the length of the control string. Don't reduce this fraction to a simpler expression.
    EXAMPLE:
        s="aaabbbbhaijjjm"
        error_printer(s) => "0/14"
        s="aaaxbbbbyyhwawiwjjjwwm"
        error_printer(s) => "8/22"
    NOTES:
    The string has a length greater or equal to one and contains only letters from ato z.

*/

$s = 'kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu';

$funzione = printerError($s);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function printerError($s) {
    $length_string = strlen($s);
    $new_str_wo_char = preg_replace('/[a-m]/', '', $s);

    return strlen($new_str_wo_char) . '/' . $length_string;
}
// another solution
function printerError($s) {
    $length_string = strlen($s);

    $allowed_char = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];

    $errors = 0;
    for ($i = 0; $i < $length_string; $i++) {
        if (!in_array($s[$i], $allowed_char)) {
            $errors += 1;
        }
    }

    return $errors . '/' . $length_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 42. Ones and Zeros

    >Given an array of ones and zeroes, convert the equivalent binary value to an integer.
    Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.
    EXAMPLE:
        Testing: [0, 0, 0, 1] ==> 1
        Testing: [0, 0, 1, 0] ==> 2
        Testing: [0, 1, 0, 1] ==> 5
        Testing: [1, 0, 0, 1] ==> 9
        Testing: [0, 0, 1, 0] ==> 2
        Testing: [0, 1, 1, 0] ==> 6
        Testing: [1, 1, 1, 1] ==> 15
        Testing: [1, 0, 1, 1] ==> 11
    NOTES:
        However, the arrays can have varying lengths, not just limited to 4.
*/

$arr = [1,1,1,1];

$funzione = binaryArrayToNumber($arr);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function binaryArrayToNumber($arr) {
    $str = implode('', $arr);

    return bindec($str);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 43. Number of People in the Bus

    >There is a bus moving in the city, and it takes and drop some people in each bus stop.

    You are provided with a list (or array) of integer arrays (or tuples).
     Each integer array has two items which represent number of people get into bus (The first item) and number of people get off the bus (The second item) in a bus stop.

    Your task is to return number of people who are still in the bus after the last bus station (after the last array). Even though it is the last bus stop, the bus is not empty and some people are still in the bus, and they are probably sleeping there :D

    Take a look on the test cases.
    Please keep in mind that the test cases ensure that the number of people in the bus is always >= 0.
     So the return integer can't be negative.
    The second value in the first integer array is 0, since the bus is empty in the first bus stop.
    EXAMPLE:
    NOTES:
*/

$bus_stops = [
    [3, 0],
    [9, 1],
    [4, 8],
    [12, 2],
    [6, 1],
    [7, 8],
];


$funzione = number($bus_stops);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function number($bus_stops) {
    $people_on_bus = 0;

    foreach ($bus_stops as $key => $value) {
        $people_on_bus += $value[0];
        $people_on_bus -= $value[1];
    }

    return $people_on_bus;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 44. Find the divisors!

    >Create a function named divisors/Divisors that takes an integer n > 1
     and returns an array with all of the integer's divisors(except for 1 and the number itself),
      from smallest to largest. If the number is prime return the string '(integer) is prime'
    EXAMPLE:
        divisors(12); // => [2, 3, 4, 6]
        divisors(25); // => [5]
        divisors(13); // => '13 is prime'
    NOTES:
*/

$integer = 13;


$funzione = divisors($integer);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function divisors($integer) {
    $divisors = [];
    for ($i = 2; $i < $integer; $i++) {
        if ($integer % $i == 0) {
            $divisors[] = $i;
        }
    }

    if (empty($divisors)) {
        return $integer . ' is prime';
    }

    return $divisors;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 45. Sum of the first nth term of Series

    >Your task is to write a function which returns the sum of following series upto nth term(parameter).
    Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...

    You need to round the answer to 2 decimal places and return it as String.
    If the given value is 0 then it should return 0.00
    You will only be given Natural Numbers as arguments.
    EXAMPLE:
        SeriesSum(1) => 1 = "1.00"
        SeriesSum(2) => 1 + 1/4 = "1.25"
        SeriesSum(5) => 1 + 1/4 + 1/7 + 1/10 + 1/13 = "1.57"
    NOTES:
*/

$n = 3;


$funzione = series_sum($n);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function series_sum($n) {
    if ($n == 0) {
        return '0.00';
    }

    $sum = 1;
    $divisor = 1;
    for ($i = 1; $i < $n; $i++) {
        $divisor += 3;
        $sum += (1 / $divisor);
    }

    $sum_round = round($sum, 2);
    $sum_round_2digits_str = number_format((float)$sum_round, 2, '.', '');

    return $sum_round_2digits_str;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 46. Reverse words

    >Create a function that accepts a string parameter, and reverses each word in the string.
     All spaces in the string should be retained.
    EXAMPLE:
        "This is an example!" ==> "sihT si na !elpmaxe"
        "double  spaces"      ==> "elbuod  secaps"
    NOTES:
*/

$str = 'double  spaces';


$funzione = reverseWords($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function reverseWords($str) {
    $array = explode(' ', $str);

    $reverse_array = [];
    foreach ($array as $key => $word) {
        $reverse_array[] = strrev($word);
    }
    $new_string = implode(' ', $reverse_array);

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 47. Odd or Even sum array

    >Given a list of numbers, determine whether the sum of its elements is odd or even.
    Give your answer as a string matching "odd" or "even".
    EXAMPLE:
        odd_or_even([0])          ==  "even"
        odd_or_even([0, 1, 4])    ==  "odd"
        odd_or_even([0, -1, -5])  ==  "even"
    NOTES:
        If the input array is empty consider it as: [0] (array with a zero).

*/

$a = [2, 5, 34, 6];


$funzione = odd_or_even($a);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function odd_or_even(array $a): string {
    $sum = 0;
    foreach ($a as $key => $number) {
        $sum += $number;
    }

    if ($sum % 2 == 0) {
        return 'even';
    }
    return 'odd';
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 48. Don't give me five!

    >In this kata you get the start number and the end number of a region and
     should return the count of all numbers except numbers with a 5 in it.
      The start and the end number are both inclusive!

    EXAMPLE:
        1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
        4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
    NOTES:
        The result may contain fives. ;-)
        The start number will always be smaller than the end number. Both numbers can be also negative!
*/

$start = 4;
$end = 17;


$funzione = dont_give_me_five($start, $end);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function dont_give_me_five($start, $end) {
    $total_numbers = 0;
    for ($i = $start; $i <= $end; $i++) {
        if (substr_count(strval($i), 5) == 0) {
            $total_numbers++;
        }
    }

    return $total_numbers;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 49. Find the stray number

    >You are given an odd-length array of integers, in which all of them are the same, except for one single number.
    Create a function which accepts such an array, and returns that single different number.
    The input array will always be valid! (odd-length >= 3)

    EXAMPLE:
    NOTES:
*/

$arr = [4,2,2,2,2];


$funzione = stray($arr);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function stray($arr)
{
    $number_1 = [$arr[0], 0];   // index 0 is the number index 1 how many times it is in the array
    $number_2 = [];             // index 0 is the number index 1 how many times it is in the array

    foreach ($arr as $key => $number) {
        if ($number == $number_1[0]) {
            $number_1[1]++;
        } else {
            $number_2[0] = $number;
            $number_2[1]++;
        }
    }

    if ($number_1[1] < $number_2[1]) {
        return $number_1[0];
    }
    return $number_2[0];
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 50. Breaking chocolate problem

    >Your task is to split the chocolate bar of given dimension n x m into small squares.
     Each square is of size 1x1 and unbreakable. Implement a function that will return minimum number of breaks needed.
    EXAMPLE:
        For example if you are given a chocolate bar of size 2 x 1 you can split it to single squares in just one break,
         but for size 3 x 1 you must do two breaks.
    NOTES:
*/

$n = 3;
$m = 1;


$funzione = breakChocolate($n, $m);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function breakChocolate($n, $m) {
    $squares = $n * $m - 1;

    return $squares;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 51. String ends with

    >Complete the solution so that it returns true if the first argument(string)
     passed in ends with the 2nd argument (also a string).
    EXAMPLE:
        solution('abc', 'bc') // returns true
        solution('abc', 'd') // returns false
    NOTES:
*/

$str = 'abc\n';
$ending = 'abc';


$funzione = solution($str, $ending);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function solution($str, $ending) {
    $index_string = strlen($str);

    for ($i = (strlen($ending) - 1); $i >= 0; $i--) {
        $index_string--;

        if ($ending[$i] != $str[$index_string]) {
            return false;
        }
    }
    return true;
}
//-----------------------------------------------------------------------------------------------------
    // 6kyu
//-----------------------------------------------------------------------------------------------------
/* 52. Find the odd int

    >Given an array, find the integer that appears an odd number of times.
    There will always be only one integer that appears an odd number of times.
    EXAMPLE:
    NOTES:
*/

$seq = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];

$funzione = findIt($seq);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function findIt(array $seq) : int
{
    $array_num = array_count_values($seq);
    foreach ($array_num as $key => $number) {
        if ($number % 2 != 0) {
            return $key;
        }
    }
}

// alternative method without array_count_values
function findIt(array $seq) : int
{
    $array_numbers = [];    // this array contains as key the number and as value the times it is found in the array

    foreach ($seq as $key => $number) {
        if (empty($array_numbers[$number])) {   // if the number as a key doesn't exist it is declared and defined with 0
            $array_numbers[$number] = 0;
        }
        $array_numbers[$number]++;
    }

    foreach ($array_numbers as $key => $number) {
        if ($number % 2 != 0) {     // when the number of times the number appears in the array is odd return the number
            return $key;
        }
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 53. Multiples of 3 or 5

    >If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
     The sum of these multiples is 23.
    Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.
    EXAMPLE:
    NOTES:
        If the number is a multiple of both 3 and 5, only count it once.
*/

$number = 10;

$funzione = solution($number);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function solution($number) {
    $sum_multiple = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum_multiple += $i;
        }
    }

    return $sum_multiple;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 54. Persistent Bugger

    >Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence,
     which is the number of times you must multiply the digits in num until you reach a single digit.

    EXAMPLE:
        persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
        persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
        persistence(4) === 0; // because 4 is already a one-digit number
    NOTES:
*/

$num = 999;

$funzione = persistence($num);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function persistence(int $num): int {
    $i = 0;
    while ($num > 9) {
        $num = array_product(str_split($num));

        $i++;
    }

    return $i;
}
// another method
function persistence(int $num): int {
    if ($num < 10) {
        return 0;
    }

    $array_num = str_split($num);

    $new_number = 9999;     // variable that is going to be updated with the new number after the multiplications

    $i = 0;
    while (strlen(strval($new_number)) > 1) {   // until the variable $new_number contains only 1 number...
        $new_number = 1;

        foreach ($array_num as $key => $number) {   // I multiply the numbers of the array $array_num among themselves
            $new_number *= $number;
        }
        $array_num = str_split($new_number);

        $i++;
    }

    return $i;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
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
echo '</pre>';


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
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 56. Find The Parity Outlier

    >You are given an array (which will have a length of at least 3, but could be very large) containing integers.
     The array is either entirely comprised of odd integers or entirely comprised of even integers
      except for a single integer N. Write a method that takes the array as an argument and returns this "outlier" N.
    EXAMPLE:
        [2, 4, 0, 100, 4, 11, 2602, 36]
        Should return: 11 (the only odd number)

        [160, 3, 1719, 19, 11, 13, -21]
        Should return: 160 (the only even number)
    NOTES:
*/

$integers = [160, 3, 1719, 19, 11, 13, -21];

$funzione = find($integers);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function find($integers) {
    $array_numbers = [
        'odd' => [
            'number' => 0,
            'times' => 0,
        ],
        'even' => [
            'number' => 0,
            'times' => 0,
        ],
    ];


    foreach ($integers as $key => $number) {
        if ($number % 2 == 0) {
            $array_numbers['even']['number'] = $number;
            $array_numbers['even']['times']++;
        } else {
            $array_numbers['odd']['number'] = $number;
            $array_numbers['odd']['times']++;
        }
    }

    if ($array_numbers['odd']['times'] > $array_numbers['even']['times']) {
        return $array_numbers['even']['number'];
    }
    return $array_numbers['odd']['number'];
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 57. Counting Duplicates

    >Write a function that will return the count of distinct case-insensitive alphabetic characters
     and numeric digits that occur more than once in the input string.
     The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.
    EXAMPLE:
        "abcde" -> 0 # no characters repeats more than once
        "aabbcde" -> 2 # 'a' and 'b'
        "aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
        "indivisibility" -> 1 # 'i' occurs six times
        "Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
        "aA11" -> 2 # 'a' and '1'
        "ABBA" -> 2 # 'A' and 'B' each occur twice
    NOTES:
*/

$text = 'aabBcde';

$funzione = duplicateCount($text);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function duplicateCount($text) {
    $duplicate_count = 0;

    $array = array_count_values(str_split(strtolower($text)));
    foreach ($array as $key => $count) {
        if ($count > 1) {
            $duplicate_count++;
        }
    }

    return $duplicate_count;
}
// alternative method
function duplicateCount($text) {
    $text = strtolower($text);

    $unique_char = '';
    $char_repeated = '';
    for ($i = 0; $i < strlen($text); $i++) {
        if (strpos($unique_char, $text[$i]) === false) {
            $unique_char .= $text[$i];
        } elseif (strpos($char_repeated, $text[$i]) === false) {
            $char_repeated .= $text[$i];
        }
    }

    return strlen($char_repeated);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 58. Stop gninnipS My sdroW!

    >Write a function that takes in a string of one or more words, and returns the same string,
     but with all five or more letter words reversed (Just like the name of this Kata).
    EXAMPLE:
        spinWords( "Hey fellow warriors" ) => returns "Hey wollef sroirraw"
        spinWords( "This is a test") => returns "This is a test"
        spinWords( "This is another test" )=> returns "This is rehtona test"
    NOTES:
        Strings passed in will consist of only letters and spaces.
        Spaces will be included only when more than one word is present.
*/

$str = 'Hey fellow warriors';

$funzione = spinWords($str);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function spinWords(string $str): string {
    $arr_str = explode(' ', $str);

    $new_array = [];
    foreach ($arr_str as $word) {
        if (strlen($word) >= 5) {
            $new_array[] = strrev($word);
        } else {
            $new_array[] = $word;
        }
    }

    $new_string = implode(' ',$new_array);

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 59. Duplicate Encoder

    >The goal of this exercise is to convert a string to a new string where each character in the new string
     is "(" if that character appears only once in the original string,
     or ")" if that character appears more than once in the original string.
     Ignore capitalization when determining if a character is a duplicate.
    EXAMPLE:
        "din"      =>  "((("
        "recede"   =>  "()()()"
        "Success"  =>  ")())())"
        "(( @"     =>  "))(("
    NOTES:
*/

$word = 'Success';

$funzione = duplicate_encode($word);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function duplicate_encode($word) {
    $word_lw = strtolower($word);

	$new_string = '';
    for ($i = 0; $i < strlen($word_lw); $i++) {
        if (substr_count($word_lw, $word_lw[$i]) > 1) {
            $new_string .= ')';
        } else {
            $new_string .= '(';
        }
    }

    return $new_string;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 60. Who likes it

    >You probably know the "like" system from Facebook and other pages.
     People can "like" blog posts, pictures or other items.
      We want to create the text that should be displayed next to such an item.
    Implement a function likes :: [String] -> String, which must take in input array,
     containing the names of people who like an item. It must return the display text as shown in the examples:
    EXAMPLE:
        likes [] // must be "no one likes this"
        likes ["Peter"] // must be "Peter likes this"
        likes ["Jacob", "Alex"] // must be "Jacob and Alex like this"
        likes ["Max", "John", "Mark"] // must be "Max, John and Mark like this"
        likes ["Alex", "Jacob", "Mark", "Max"] // must be "Alex, Jacob and 2 others like this"
    NOTES:
        For 4 or more names, the number in and 2 others simply increases.
*/

$names = ["Alex", "Jacob", "Mark", "Max"];
// $names = [];

$funzione = likes($names);
echo '<pre>';
print_r($funzione);
echo '</pre>';


function likes($names) {
    switch (count($names)) {
        case 0:
            return 'no one likes this';
        case 1:
            return $names[0] . ' likes this';
        case 2:
            return $names[0] . ' and ' . $names[1] . ' like this';
        case 3:
            return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
        default:
            $number_minus_2 = count($names) - 2;
            return $names[0] . ', ' . $names[1] . ' and ' . $number_minus_2 . ' others like this';
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 61. Equal Sides Of An Array

    >You are going to be given an array of integers.
     Your job is to take that array and find an index N where the sum of the integers to the left of N
     is equal to the sum of the integers to the right of N.
     If there is no index that would make this happen, return -1.
    EXAMPLE:
        Let's say you are given the array {1,2,3,4,3,2,1}: Your function will return the index 3,
        because at the 3rd position of the array, the sum of left side of the index ({1,2,3})
        and the sum of the right side of the index ({3,2,1}) both equal 6.

        Let's look at another one.
        You are given the array {1,100,50,-51,1,1}: Your function will return the index 1,
        because at the 1st position of the array, the sum of left side of the index ({1})
        and the sum of the right side of the index ({50,-51,1,1}) both equal 1.

        Last one:
        You are given the array {20,10,-80,10,10,15,35}
        At index 0 the left side is {}
        The right side is {10,-80,10,10,15,35}
        They both are equal to 0 when added. (Empty arrays are equal to 0 in this problem)
        Index 0 is the place where the left side and right side are equal.

    NOTES:
        If you do not find an index that fits the rules, then you will return -1
        If you are given an array with multiple answers, return the lowest correct index.
*/

$arr = [1,2,3,4,3,2,1];

$funzione = find_even_index($arr);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_even_index($arr) {
    foreach ($arr as $index => $number) {
        $arr_left = array_slice($arr, 0, $index);
        $arr_right = array_slice($arr, $index + 1);

        $arr_left_sum = array_sum($arr_left);
        $arr_right_sum = array_sum($arr_right);

        if ($arr_left_sum == $arr_right_sum) {
            return $index;
        }
    }

    return -1;
}
// alternative solution
function find_even_index($arr) {
    $arr_copy = $arr;

    $number_left_sum = 0;
    foreach ($arr_copy as $key => $number) {
        unset($arr_copy[$key]);

        if ($number_left_sum == array_sum($arr_copy)) {
            return $key;
        } else {
            $number_left_sum += $number;
        }
    }

    return -1;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 62. Tribonacci Sequence

    >As the name may already reveal, it works basically like a Fibonacci,
     but summing the last 3 (instead of 2) numbers of the sequence to generate the next.
     You need to create a fibonacci function that given a signature array/list,
     returns the first n elements - signature included of the so seeded sequence.
    EXAMPLE:
        [1, 1, 1] => [1, 1 ,1, 3, 5, 9, 17, 31, ...]
        [0, 0, 1] => [0, 0, 1, 1, 2, 4, 7, 13, 24, ...]
    NOTES:
        Signature will always contain 3 numbers
        n will always be a non-negative number
        if n == 0, then return an empty array
*/

$signature = [1,1,1];
$n = 10;

$funzione = tribonacci($signature, $n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function tribonacci($signature, $n) {
    while (sizeof($signature) < $n) {
        $signature[] = array_sum(array_slice($signature, -3));
    }

    return array_slice($signature, 0, $n);
}
// alternative solution
function tribonacci($signature, $n) {
    if ($n == 0) {
        return [];
    } elseif ($n <= 3) {
        return array_slice($signature, 0, $n);
    }

    $arr = $signature;
    for ($i = 3; $i < $n; $i++) {
        $new_number = $arr[count($arr) - 1] + $arr[count($arr) - 2] + $arr[count($arr) - 3]; // the new number is the sum of the last 3
        $arr[] = $new_number;
    }

    return $arr;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 63. Bit Counting

    >Write a function that takes an integer as input,
     and returns the number of bits that are equal to one in the binary representation of that number.
    EXAMPLE:
        The binary representation of 1234 is 10011010010, so the function should return 5 in this case
    NOTES:
        You can guarantee that input is non-negative.
*/


$n = 9;

$funzione = countBits($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function countBits($n)
{
    return substr_count(decbin($n), '1');
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 64. Replace With Alphabet Position

    >In this kata you are required to, given a string,
     replace every letter with its position in the alphabet.
    EXAMPLE:
        alphabet_position('The sunset sets at twelve o\' clock.') =>
        "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11"
    NOTES:
*/


$s = 'The sunset sets at twelve o\' clock.';

$funzione = alphabet_position($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function alphabet_position(string $s): string {
    $str = str_replace(' ', '', strtolower($s));

    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $arr_str = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($alphabet, $str[$i]) !== false) {
            $arr_str[] = strpos($alphabet, $str[$i]) + 1;
        }
    }

    return implode(' ', $arr_str);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 65. Array.diff

    >Your goal in this kata is to implement a difference function,
     which subtracts one list from another and returns the result.
     It should remove all values from list a, which are present in list b.
     If a value is present in b, all of its occurrences must be removed from the other:
    EXAMPLE:
        arrayDiff([1,2],[1]) == [2]
        arrayDiff([1,2,2,2,3],[2]) == [1,3]
    NOTES:
*/


$a = [1,2,2,2,3];
$b = [2,3];

$funzione = arrayDiff($a, $b);
echo '<pre>';
print_r($funzione);
echo '</pre';


function arrayDiff($a, $b) {
    return array_values(array_diff($a, $b));
}
// alternative solution without array_diff()
function arrayDiff($a, $b) {
    if (empty($b)) {
        return $a;
    }

    $a_c = $a;
    foreach ($b as $number_del) {
        foreach ($a_c as $key2 => $number) {
            if ($number === $number_del) {
                unset($a_c[$key2]);
            }
        }
    }

    return array_values($a_c);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 66. Unique In Order

    >Implement the function unique_in_order which takes as argument a sequence and
     returns a list of items without any elements with the same value next to each other
     and preserving the original order of elements.
    EXAMPLE:
        uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
        uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
        uniqueInOrder([1,2,2,3,3])       == {1,2,3}
    NOTES:
*/


// $iterable = "AAAABBBCCDAABBB";
// $iterable = "ABBCcAD";
$iterable = [1,2,2,2,3];

$funzione = uniqueInOrder($iterable);
echo '<pre>';
print_r($funzione);
echo '</pre';


function uniqueInOrder($iterable) {
    if (empty($iterable)) {
        return [];
    }
    if (gettype($iterable) == 'array') {
        $iterable = implode('', $iterable);
    }

    $arr_unique = [];
    for ($i = 0; $i < strlen($iterable); $i++) {
        if ($iterable[$i] != $iterable[$i+1]) {
            $arr_unique[] = $iterable[$i];
        }
    }

    return $arr_unique;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 67. Consecutive strings

    >You are given an array of string inputs strarr and an integer k.
     Your task is to return the longest possible string that can be derived
     by combining k consecutive elements of the input strarr.
    EXAMPLE:
        longest_consec(["zone", "abigail", "theta", "form", "libe", "zas"], 2)
        should return "abigailtheta"
    NOTES:
        In the case of there being multiple possible matches, only the first one will be considered correct.
        In any of the following cases, the return value should be an empty string "":
            strarr.length === 0
            strarr.length < k
            k <= 0
*/


$strarr = ["zone", "abigail", "theta", "form", "libe", "zas"];
$k = 2;

$funzione = longestConsec($strarr, $k);
echo '<pre>';
print_r($funzione);
echo '</pre';


function longestConsec($strarr, $k) {
    $arr_sorted = insertionSort($strarr, count($strarr));

    $new_string = '';
    for ($i = 0; $i < $k; $i++) {
        $new_string .= $arr_sorted[$i];
    }

    return $new_string;
}

function insertionSort($arr, $n) {      // insertion sort algorithm to order an array descending based on string length
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i-1;

        while ($j >= 0 && strlen($arr[$j]) < strlen($key)) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }

    return $arr;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 68. Are they the same

    >Given two arrays a and b write a function that checks whether the two arrays have the "same" elements
     "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.
    EXAMPLE:
        a = [121, 144, 19, 161, 19, 144, 19, 11]
        b = [121, 14641, 20736, 361, 25921, 361, 20736, 361]
        returns true because in b 121 is the square of 11, 14641 is the square of 121,
        20736 the square of 144, 361 the square of 19, 25921 the square of 161, and so on
    NOTES:
        a or b might be []
        a or b might be null
        If a or b are null return false.
*/


$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];

$funzione = comp($a1, $a2);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function comp($a1, $a2) {
    if ($a1 === null || $a2 === null || count($a1) != count($a2)) {
        return false;
    }
    sort($a1);
    sort($a2);

    foreach ($a1 as $key => $number) {
        if ($number * $number !== $a2[$key]) {
            return false;
        }
    }
    return true;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 69. Find the missing letter

    >Find the missing letter
     Write a method that takes an array of consecutive (increasing) letters as input an
     that returns the missing letter in the array.
     You will always get an valid array. And it will be always exactly one letter be missing.
     The length of the array will always be at least 2.
     The array will always contain letters in only one case.
    EXAMPLE:
        ["a","b","c","d","f"] -> "e"
        ["O","Q","R","S"] -> "P"
    NOTES:
        (Use the English alphabet with 26 letters!)
*/


$array = ['a','b','c','d','f'];
$array = ['O','Q','R','S'];

$funzione = find_missing_letter($array);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_missing_letter($array) {
    if ($array[0] == strtoupper($array[0])) {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    } else {
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    }

    $pos = strpos($alphabet, $array[0]);
    foreach ($array as $key => $value) {
        if ($value != $alphabet[$pos+$key]) {
            return $alphabet[$pos+$key];
        }
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 70. Find the unique number

    >There is an array with some numbers. All numbers are equal except for one. Try to find it!
     It’s guaranteed that array contains at least 3 numbers.
    EXAMPLE:
        findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
        findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
    NOTES:
*/


$a = [0, 0, 0.55, 0, 0];

$funzione = find_uniq($a);
echo '<pre>';
print_r($funzione);
echo '</pre';


function find_uniq($a) {
    sort($a);

    if ($a[0] != $a[1]) {
        return $a[0];
    } else {
        return $a[count($a)-1];
    }
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 71. Build Tower

    >Build Tower
     Build Tower by the following given argument:
     number of floors (integer and always greater than 0).
     Tower block is represented as *
    EXAMPLE:
        for example, a tower of 3 floors looks like below
        [
        '  *  ',
        ' *** ',
        '*****'
        ]
        and a tower of 6 floors looks like below
        [
        '     *     ',
        '    ***    ',
        '   *****   ',
        '  *******  ',
        ' ********* ',
        '***********'
        ]
    NOTES:
        return an array
*/


$n = 3;

$funzione = tower_builder($n);
echo '<pre>';
print_r($funzione);
echo '</pre';


function tower_builder($n) {
    $result = [];

    for ($i = 1; $i <= $n; $i++) {
        $result[] = str_repeat(' ', $n-$i) . str_repeat('*', ($i-1)*2+1) . str_repeat(' ', $n-$i);
    }

    return $result;
}
// another solution
function tower_builder($n) {
    $base_num = 1;
    for ($i = 1; $i < $n; $i++) {   // maximum asterisk last row
        $base_num += 2;
    }

    $spaces = ($base_num - 1) / 2;  // number of spaces before and after the asterisk

    $n_asterisk = 1;
    $towe = [];
    for ($i = 1; $i <= $n; $i++) {
        $line = '';
        for ($j = 1; $j <= $spaces; $j++) { // add the spaces before the asterisk
            $line .= ' ';
        }
        for ($j = 1; $j <= $n_asterisk; $j++) { // add the asterisk/s
            $line .= '*';
        }
        for ($j = 1; $j <= $spaces; $j++) { // add the spaces after the asterisk
            $line .= ' ';
        }
        $n_asterisk += 2;   // update the number of asterisk
        $spaces -= 1;       // and spaces

        $towe[] = $line;
    }

    return $towe;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 72. Convert string to camel case

    >Complete the method/function so that it converts dash/underscore delimited words into camel casing.
     The first word within the output should be capitalized only if the original word was capitalized
     (known as Upper Camel Case, also often referred to as Pascal case).
    EXAMPLE:
        toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior"
        toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"
    NOTES:
*/


$str = "the_stealth_warrior";

$funzione = toCamelCase($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function toCamelCase($str) {
    for ($i=0; $i < strlen($str); $i++) {
        if ($str[$i-1] == '_' || $str[$i-1] == '-') {
            $str[$i] = strtoupper($str[$i]);
        }
    }
    $str = str_replace(['_', '-'], '', $str);

    return $str;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
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
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 74. Highest Scoring Word

    >Given a string of words, you need to find the highest scoring word.
     Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.
     You need to return the highest scoring word as a string.
     If two words score the same, return the word that appears earliest in the original string.
    EXAMPLE:
    NOTES:
        All letters will be lowercase and all inputs will be valid.
*/


$x = 'man i need a taxi up to ubud';

$funzione = high($x);
echo '<pre>';
print_r($funzione);
echo '</pre';


function high($x) {
    $alphabet = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
    ];

    $words = explode(' ', $x);

    $points = [];   // array with points of each word
    $point = 0;
    foreach ($words as $word) {
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $point += $alphabet[$letter];
        }
        $points[] = $point;
        $point = 0;
    }

    $max_point_word = array_search(max($points), $points); // the index of the word with maximum point from the array points
    return $words[$max_point_word];
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
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
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 76. Bouncing Balls

    >A child is playing with a ball on the nth floor of a tall building. The height of this floor, h, is known.
     He drops the ball out of the window. The ball bounces (for example), to two-thirds of its height (a bounce of 0.66).
     His mother looks out of a window 1.5 meters from the ground.
     How many times will the mother see the ball pass in front of her window (including when it's falling and bouncing?

     Three conditions must be met for a valid experiment:
        Float parameter "h" in meters must be greater than 0
        Float parameter "bounce" must be greater than 0 and less than 1
        Float parameter "window" must be less than h.
     If all three conditions above are fulfilled, return a positive integer, otherwise return -1.
    EXAMPLE:
        - h = 3, bounce = 0.66, window = 1.5, result is 3
        - h = 3, bounce = 1, window = 1.5, result is -1
        (Condition 2) not fulfilled).
    NOTES:
*/


$h = 3;
$bounce = 0.66;
$window = 1.5;

$funzione = bouncingBall($h, $bounce, $window);
echo '<pre>';
print_r($funzione);
echo '</pre';

function bouncingBall($h, $bounce, $window) {
    if ($h <= 0 || $bounce <= 0 || $bounce >= 1 || $window >= $h) {
        return -1;
    }

    $bounces = 1;
    while ($window <= $h) {
        $h *= $bounce;

        if ($window < $h) {
            $bounces += 2;
        }
    }

    return $bounces;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 77. Does my number look big in this

    >A Narcissistic Number is a number which is the sum of its own digits,
     each raised to the power of the number of digits in a given base.
     In this Kata, we will restrict ourselves to decimal (base 10).
     Your code must return true or false depending upon whether the given number is a Narcissistic number in base 10.
    EXAMPLE:
        take 153 (3 digits):
        1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

        and 1634 (4 digits):
        1^4 + 6^4 + 3^4 + 4^4 = 1 + 1296 + 81 + 256 = 1634
    NOTES:
        Error checking for text strings or other invalid inputs is not required,
        only valid integers will be passed into the function.
*/


$value = 7;

$funzione = narcissistic($value);
echo $funzione ? 'true' : 'false';  // to print a boolean value

function narcissistic($value) {
    $arr = str_split($value);
    $power = strlen($value);

    $sum = 0;
    foreach ($arr as $number) {
        $sum += pow($number, $power);
    }

    if ($sum == $value) {
        return true;
    }

    return false;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 78. Which are in

    >Given two arrays of strings a1 and a2 return a sorted array r
     in lexicographical order of the strings of a1 which are substrings of strings of a2.
    EXAMPLE:
        #Example 1: a1 = ["arp", "live", "strong"]
            a2 = ["lively", "alive", "harp", "sharp", "armstrong"]
            returns ["arp", "live", "strong"]

        #Example 2: a1 = ["tarp", "mice", "bull"]
            a2 = ["lively", "alive", "harp", "sharp", "armstrong"]
            returns []
    NOTES:
        Beware: r must be without duplicates.
*/


// $array1 = ["arp", "live", "strong"];
$array1 = ["live", "strong", "arp"];
$array2 = ["lively", "alive", "harp", "sharp", "armstrong"];

$funzione = inArray($array1, $array2);
echo '<pre>';
print_r($funzione);
echo '</pre';


function inArray($array1, $array2) {

    $words_included = [];
    foreach ($array1 as $word1) {
        $counter = true;
        foreach ($array2 as $word2) {
            if (substr_count($word2, $word1) > 0 && $counter === true) {
                $words_included[] = $word1;
                $counter = false;
            }
        }
    }
    sort($words_included);

    return $words_included;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/* 79. Detect Pangram

    >A pangram is a sentence that contains every single letter of the alphabet at least once.
    Given a string, detect whether or not it is a pangram. Return True if it is, False if not.
    EXAMPLE:
        The sentence "The quick brown fox jumps over the lazy dog" is a pangram,
        because it uses the letters A-Z at least once (case is irrelevant).
    NOTES:
        Ignore numbers and punctuation.
*/


$string = "The quick brown fox jumps over the lazy dog.";

$funzione = detect_pangram($string);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function detect_pangram($string) {
    $alphabet = range('a', 'z');

    foreach ($alphabet as $letter) {
        if (strpos(strtolower($string), $letter) === false) {
            return false;
        }
    }

    return true;
}
// another method
function detect_pangram($string) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    $count = 0;
    for ($i = 0; $i < strlen($alphabet); $i++) {
        if (substr_count(strtolower($string), $alphabet[$i]) > 0) {
            $count += 1;
        }
    }

    if ($count == 26) {
        return true;
    }
    return false;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  80. Is a number prime

    >Define a function that takes an integer argument and returns logical value true or false
     depending on if the integer is a prime.
     Per Wikipedia, a prime number (or a prime) is a natural number greater than
     1 that has no positive divisors other than 1 and itself.
    EXAMPLE:
        is_prime(1)     false
        is_prime(2)     true
        is_prime(-1)    false
    NOTES:
        You can assume you will be given an integer input.
        You can not assume that the integer will be only positive.
        You may be given negative numbers as well (or 0).
        There are no fancy optimizations required, but still the most trivial solutions might time out.
        Try to find a solution which does not loop all the way up to n.
*/


$n = 8;

$funzione = is_prime($n);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function is_prime($n) {
    if ($n <= 1) {
        return false;
    }

    $root = sqrt($n);
    for ($i = 2; $i <= $root; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  81. Mexican Wave

    >In this simple Kata your task is to create a function that turns a string into a Mexican Wave.
        The wave (known as the Mexican wave in the English-speaking world outside North America)
        is an example of metachronal rhythm achieved in a packed stadium when successive
        groups of spectators briefly stand, yell, and raise their arms.
        Immediately upon stretching to full height, the spectator returns to the usual seated position.
    You will be passed a string and you must return that string in an array where an uppercase letter is a person standing up.
    EXAMPLE:
        wave("hello") => []string{"Hello", "hEllo", "heLlo", "helLo", "hellO"}
    NOTES:
        1.  The input string will always be lower case but maybe empty.
        2.  If the character in the string is whitespace then pass over it as if it was an empty seat.
*/


$people = " gap ";

$funzione = wave($people);
echo '<pre>';
print_r($funzione);
echo '</pre';


function wave($people) {
    $wave = [];
    for ($i = 0; $i < strlen($people); $i++) {
        if ($people[$i] != ' ') {
            $word = $people;
            $word[$i] = strtoupper($word[$i]);

            $wave[] = $word;
        }
    }

    return $wave;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  82. Split Strings

    >Create a funcion so that it splits the string into pairs of two characters.
     If the string contains an odd number of characters then it should replace
     the missing second character of the final pair with an underscore ('_').
    EXAMPLE:
        solution('abc') // should return ['ab', 'c_']
        solution('abcdef') // should return ['ab', 'cd', 'ef']
    NOTES:
*/


$str = "abcdef";

$funzione = solution($str);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solution($str) {
    if (strlen($str) % 2 != 0) {
        $str .= '_';
    }
    return str_split($str, 2);
}
// alternative method
function solution($str) {
    $arr = [];
    for ($i = 0; $i < strlen($str); $i += 2) {
        $arr[] = substr($str, $i, 2);
    }

    if (strlen($str) % 2 != 0) {
        $arr[count($arr)-1] .= '_';
    }

    return $arr;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  83. IP Validation

    >Write an algorithm that will identify valid IPv4 addresses in dot-decimal format.
     IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.
     Input to the function is guaranteed to be a single string.
    EXAMPLE:
        Valid inputs:
        1.2.3.4
        123.45.67.89

        Invalid inputs:
        1.2.3
        1.2.3.4.5
        123.456.78.90
        123.045.067.089
    NOTES:
        Note that leading zeros (e.g. 01.02.03.04) are considered invalid.
*/


$str = 'adb.255.255.255';
$str = '21.129.168.66';
// $str = 'abc.def.ghi.jkl';

$funzione = isValidIP($str);
echo $funzione ? 'true' : 'false';  // to print a boolean value


function isValidIP($str) {
    $arr = explode('.', $str);

    if (count($arr) != 4 || substr_count($str, ' ') > 0) {
        return false;
    }

    foreach ($arr as $num) {
        if (!is_numeric($num) || $num < 0 || $num > 255) {
            return false;
        }
    }

    return true;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  84. WeIrD StRiNg CaSe

    >Write a function that accepts a string, and returns the same string
     with all even indexed characters in each word upper cased,
     and all odd indexed characters in each word lower cased.
    EXAMPLE:
        toWeirdCase("String"); // => returns "StRiNg"
        toWeirdCase("Weird string case"); // => returns "WeIrD StRiNg CaSe"
    NOTES:
        The passed in string will only consist of alphabetical characters and spaces(' ').
        Spaces will only be present if there are multiple words.
        Words will be separated by a single space(' ').
*/


$string = 'Hello world foo bar baz';
$string = 'wEll i GuesS you passed';

$funzione = toWeirdCase($string);
echo '<pre>';
print_r($funzione);
echo '</pre';


function toWeirdCase($string) {
    $arr = explode(' ', $string);

    $arr_words = [];
    foreach ($arr as $word) {
        $new_word = '';
        for ($i = 0; $i < strlen($word); $i++) {
            if ($i % 2 == 0) {
                $new_word .= strtoupper($word[$i]);
            } else {
                $new_word .= strtolower($word[$i]);
            }
        }
        $arr_words[] = $new_word;
        $new_word = '';
    }

    return implode(' ', $arr_words);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  85. CamelCase Method

    >Write simple .camelCase method for strings.
     All words must have their first letter capitalized without spaces.
    EXAMPLE:
        camel_case("hello case"); // => "HelloCase"
        camel_case("camel case word"); // => "CamelCaseWord"
    NOTES:
*/


$s = "camel case method";

$funzione = camel_case($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function camel_case(string $s): string {
    return str_replace(' ', '', ucwords($s));
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  86. Find the missing term in an Arithmetic Progression

    >An Arithmetic Progression is defined as one in which there is a constant difference between
     the consecutive terms of a given series of numbers.
     You are provided with consecutive elements of an Arithmetic Progression.
     There is however one hitch: exactly one term from the original series is missing
     from the set of numbers which have been given to you.
     The rest of the given series is the same as the original AP. Find the missing term.
     You have to write a function that receives a list, list size will always be at least 3 numbers.
     The missing term will never be the first or last one.
    EXAMPLE:
        findMissing([1, 3, 5, 9, 11]) == 7
    NOTES:
*/


$list = [1, 2, 3, 5];

$funzione = findMissing($list);
echo '<pre>';
print_r($funzione);
echo '</pre';


function findMissing($list) {
    $differences = [];
    for ($i = 1; $i < count($list); $i++) {
        $differences[] = $list[$i] - $list[$i-1];
    }

    if ($differences[0] > 0) {
        sort($differences);
    } else {
        rsort($differences);
    }

    $missing_num = 0;
    for ($i = 1; $i < count($list); $i++) {
        if ($list[$i] - $list[$i-1] != $differences[0]) {
            $missing_num = $list[$i] - $differences[0];
        }
    }

    return $missing_num;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  87. Sums of Parts

    >Let us consider this example (array written in general format):
        ls = [0, 1, 3, 6, 10]
        Its following parts:
        ls = [0, 1, 3, 6, 10]
        ls = [1, 3, 6, 10]
        ls = [3, 6, 10]
        ls = [6, 10]
        ls = [10]
        ls = []
     The corresponding sums are (put together in a list): [20, 20, 19, 16, 10, 0]
     The function parts_sums will take as parameter a list ls
     and return a list of the sums of its parts as defined above.
    EXAMPLE:
        ls = [1, 2, 3, 4, 5, 6]
        parts_sums(ls) -> [21, 20, 18, 15, 11, 6, 0]
    NOTES:
        Some lists can be long.
*/


$ls = [1, 2, 3, 4, 5, 6];

$funzione = partsSums($ls);
echo '<pre>';
print_r($funzione);
echo '</pre';


function partsSums($ls) {
    $start = 0;

    $arr_num = [];
    while (count($arr_num) <= count($ls)) {

        $number = 0;
        for ($i = $start; $i < count($ls); $i++) {
            $number += $ls[$i];
        }
        $arr_num[] = $number;
        $start += 1;
    }

    return $arr_num;
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  88. Dashatize it

    >Given a number, return a string with dash'-'marks before and after each odd integer,
     but do not begin or end the string with a dash mark.
    EXAMPLE:
        dashatize(274) -> '2-7-4'
        dashatize(6815) -> '68-1-5'
    NOTES:
*/


$num = -28369;

$funzione = dashatize($num);
echo '<pre>';
print_r($funzione);
echo '</pre';


function dashatize($num) {
    $str = str_replace(['1', '3', '5', '7', '9', '--'], ['-1-', '-3-', '-5-', '-7-', '-9-', '-'], strval($num));

    return trim($str, '-');
}
// alternative method
function dashatize($num) {
    if ($num < 0) {
        $num  *= -1;
    }
    if (strlen($num) == 1) {
        return $num;
    }

    $num_s = strval($num);
    $str = '';

    if ($num_s[0] % 2 != 0) {
        $str .= $num_s[0] . '-';
    } else {
        $str .= $num_s[0];
    }

    for ($i = 1; $i < strlen($num_s)-1; $i++) {
        if ($num_s[$i] % 2 != 0) {
            $str .= '-' . $num_s[$i] . '-';
        } else {
            $str .= $num_s[$i];
        }
    }

    if ($num_s[strlen($num_s)-1] % 2 != 0) {
        $str .= '-' . $num_s[strlen($num_s)-1];
    } else {
        $str .= $num_s[strlen($num_s)-1];
    }

    return str_replace('--', '-', $str);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  89. Length of missing array

    >You get an array of arrays.
    If you sort the arrays by their length, you will see, that their length-values are consecutive.
    But one array is missing!

    You have to write a method, that return the length of the missing array.
    EXAMPLE:
        [[1, 2], [4, 5, 1, 1], [1], [5, 6, 7, 8, 9]] --> 3
    NOTES:
        If the array of arrays is null/nil or empty, the method should return 0.
        When an array in the array is null or empty, the method should return 0 too!
        There will always be a missing element and its length will be always between the given arrays.
*/


$arrayOfArrays = [
    [1, 2],
    [4, 5, 1, 1],
    [1],
    [5, 6, 7, 8, 9]
];

$funzione = getLengthOfMissingArray($arrayOfArrays);
echo '<pre>';
print_r($funzione);
echo '</pre';


function getLengthOfMissingArray($arrayOfArrays) {
    if ($arrayOfArrays === null || empty($arrayOfArrays)) {
        return 0;
    }
    foreach ($arrayOfArrays as $arr) {
        if ($arr === null || empty($arr)) {
            return 0;
        }
    }

    usort($arrayOfArrays, 'sortByLength');

    for ($i = 0; $i < count($arrayOfArrays); $i++) {
        if (count($arrayOfArrays[$i]) != count($arrayOfArrays[$i+1])+1 ) {
            return count($arrayOfArrays[$i])-1;
        }
    }
}

function sortByLength($a, $b) {     // function to sort an array in descending order based on sub array length
    return count($b) - count($a);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
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
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  91. Consonant value

    >Given a lowercase string that has alphabetic characters only and no spaces,
     return the highest value of consonant substrings.
     Consonants are any letters of the alphabet except "aeiou".
     We shall assign the following values: a = 1, b = 2, c = 3, .... z = 26.
    EXAMPLE:
        For example, for the word "zodiacs", let's cross out the vowels. We get: "z o d ia cs"
        -- The consonant substrings are: "z", "d" and "cs" and the values are z = 26, d = 4 and cs = 3 + 19 = 22.
        The highest is 26.
        solve("zodiacs") = 26

        For the word "strength", solve("strength") = 57
        -- The consonant substrings are: "str" and "ngth" with values "str" = 19 + 20 + 18 = 57
        and "ngth" = 14 + 7 + 20 + 8 = 49.
        The highest is 57.
    NOTES:
*/


$s = "twelfthstreet";

$funzione = solve($s);
echo '<pre>';
print_r($funzione);
echo '</pre';


function solve($s) {
    $alphabet = [
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
    ];

    $arr_points = [];
    $points = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $letter = $s[$i];
        if ($alphabet[$letter] !== null) {
            $points += $alphabet[$letter];
        } else {
            $arr_points[] = $points;
            $points = 0;
        }

        if ($i == (strlen($s)-1)) {
            $arr_points[] = $points;
            $points = 0;
        }
    }

    return max($arr_points);
}
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
/*  92. Backwards Read Primes

    >Backwards Read Primes are primes that when read backwards in base 10 (from right to left) are a different prime.
     (This rules out primes which are palindromes.)
     Find all Backwards Read Primes between two positive given numbers (both inclusive),
     the second one always being greater than or equal to the first one.
     The resulting array or the resulting string will be ordered following the natural order of the prime numbers.
    EXAMPLE:
        13 17 31 37 71 73 are Backwards Read Primes
        13 is such because it's prime and read from right to left writes 31 which is prime too.
        Same for the others.

        backwardsPrime(2, 100) => [13, 17, 31, 37, 71, 73, 79, 97]
        backwardsPrime(9900, 10000) => [9923, 9931, 9941, 9967]
        backwardsPrime(501, 599) => []
    NOTES:
        Return only the first backwards-read prime between start and end or 0 if you don't find any
*/


$start = 70000;
$stop = 70245;

$funzione = backwardsPrime($start, $stop);
echo '<pre>';
print_r($funzione);
echo '</pre';


function backwardsPrime($start, $stop) {
    $arr = [];

    for ($i = $start; $i <= $stop; $i++) {  // loop each number

        $prime = is_prime($i);

        if ($prime) {   // if $i is prime
            $rev_num = intval(strrev(strval($i)));  // reverse number $i,    i.e. 13 becomes 31
            $rev_prime = is_prime($rev_num);

            if ($rev_prime && $rev_num != $i) {
                $arr[] = $i;
            }
        }
    }

    return $arr;
}

function is_prime($n) {     // if number in input is prime return false else true
    $root = sqrt($n);
    for ($j = 2; $j <= $root; $j++) {
        if ($n % $j == 0) {
            return false;
        }
    }
    return true;
}
//-----------------------------------------------------------------------------------------------------







?>
