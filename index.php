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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';

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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';

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
echo '</pre';

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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


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
echo '</pre';


function number($bus_stops) {
    $people_on_bus = 0;

    foreach ($bus_stops as $key => $value) {
        $people_on_bus += $value[0];
        $people_on_bus -= $value[1];
    }

    return $people_on_bus;
}
//-----------------------------------------------------------------------------------------------------







?>
