<?php
//-----------------------------------------------------------------------------------------------------
    /* 1. Multiply

        >Given two integers multiply them and return the result
        EXAMPLE:
        NOTES:
    */

// $a = 5;
// $b = 8;
//
// $funzione = multiply($a, $b);
// echo $funzione;
//
// function multiply($a, $b) {
//     return $a * $b;
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 2. Even or Odd

        >Create a function that takes an integer as an argument and returns "Even" for even numbers
         or "Odd" for odd numbers.
        EXAMPLE:
        NOTES:
    */

// $n = 2;
//
// $funzione = even_or_odd($n);
// echo $funzione;
//
// function even_or_odd(int $n): string {
//     if ($n % 2 == 0) {
//         return 'Even';
//     } else {
//         return 'Odd';
//     }
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 3. Sum of positive

        >You get an array of numbers, return the sum of all of the positives ones.
        EXAMPLE:
            [1,-4,7,12] => 1 + 7 + 12 = 20
        NOTES:
            if there is nothing to sum, the sum is default to 0.
    */

// $arr = [-1, 2, 3, 4, -5];
//
// $funzione = positive_sum($arr);
// echo $funzione;
//
// function positive_sum($arr) {
//     if (empty($arr)) {
//         return 0;
//     } else {
//         $sum = 0;
//         foreach ($arr as $key => $value) {
//             if ($value > 0) {
//                 $sum += $value;
//             }
//         }
//
//         return $sum;
//     }
// }
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

// $n = 14;
//
// $funzione = opposite($n);
// echo $funzione;
//
// function opposite($n) {
//     return $n * -1;
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 5. Remove First and Last Character

        >Your goal is to create a function that removes the first and last characters of a string.
         You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
        EXAMPLE:
        NOTES:
    */

// $s = 'place';
//
// $funzione = remove_char($s);
// echo $funzione;
//
// function remove_char(string $s): string {
//     return substr($s, 1, -1);
// }
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

// $num = -20;
//
// $funzione = makeNegative($num);
// echo $funzione;
//
// function makeNegative(float $num) : float {
//     if ($num <= 0) {
//         return $num;
//     }
//
//     return $num * -1;
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 7. String repeat

        >Write a function called repeatString which repeats the given String src exactly count times.
        EXAMPLE:
            repeatStr(6, "I") // "IIIIII"
            repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"
        NOTES:
    */

// $n = 3;
// $str = '*';
//
// $funzione = repeatStr($n, $str);
// echo $funzione;
//
// function repeatStr($n, $str)
// {
//     $new_string = '';
//     for ($i = 1; $i <= $n; $i++) {
//         $new_string .= $str;
//     }
//
//     return $new_string;
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 8. Remove String Spaces

        >Simple, remove the spaces from the string, then return the resultant string.
        EXAMPLE:
        NOTES:
    */

// $s = '8 j 8   mBliB8g  imjB8B8  jl  B';
//
// $funzione = no_space($s);
// echo $funzione;
//
// function no_space(string $s): string {
//     return str_replace(' ', '', $s);
// }
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

// $arr = [3, 5, 10, 1, 4, 55];
//
// $funzione = smallestInteger($arr);
// echo $funzione;
//
// function smallestInteger($arr) {
//     $smallest_number = $arr[0];
//
//     foreach ($arr as $key => $value) {
//         if ($value < $smallest_number) {
//             $smallest_number = $value;
//         }
//     }
//
//     return $smallest_number;
// }
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

// $n = 8;
//
// $funzione = summation($n);
// echo $funzione;
//
// function summation($n) {
//     $sum = 0;
//
//     for ($i = $n; $i >= 1; $i--) {
//         $sum += $i;
//     }
//
//     return $sum;
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 11. Convert boolean values to strings 'Yes' or 'No'.

        >Write a function that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
        EXAMPLE:
        NOTES:
    */

// $bool = true;
//
// $funzione = boolToWord($bool);
// echo $funzione;
//
// function boolToWord($bool) {
//     if ($bool === true) {
//         return 'Yes';
//     }
//
//     return 'No';
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 12. Reversed Strings

        >Write a function so that it reverses the string value passed into it.
        EXAMPLE:
        NOTES:
    */

// $str = 'world';
//
// $funzione = solution($str);
// echo $funzione;
//
//
// function solution($str) {
//     return strrev($str);
// }
// function solution($str) {   // another way
//     $reversed_string = '';
//
//     for ($i = strlen($str); $i >= 0; $i--) {
//         $reversed_string .= $str[$i];
//     }
//
//     return $reversed_string;
// }
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

// $year = 50;
//
// $funzione = centuryFromYear($year);
// echo $funzione;
//
//
// function centuryFromYear($year)
// {
//     $year_to_string = strval($year);
//
//     if ($year_to_string[strlen($year_to_string)-1] > 0 || $year_to_string[strlen($year_to_string)-2] > 0) { // if either the last digit or the one before is greater than 0
//         $number_minus_2digits = substr($year, 0, -2);
//         $century = $number_minus_2digits += 1;
//
//         return $century;
//     }
//
//     return substr($year, 0, -2);
// }
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

// $op = '*';
// $val1 = 4;
// $val2 = 7;
//
// $funzione = centuryFromYear($year);
// echo $funzione;
//
//
// function basicOp($op, $val1, $val2)
// {
//     switch ($op) {
//         case '*':
//             return $val1 * $val2;
//         case '+':
//             return $val1 + $val2;
//         case '-':
//             return $val1 - $val2;
//         case '/':
//             return $val1 / $val2;
//     }
// }
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

// $num = 4;
//
// $funzione = numberToString($num);
// echo $funzione;
//
//
// function numberToString($num)
// {
//     return strval($num);
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 16. Count of positives / sum of negatives

        >Given an array of integers.
        Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
        If the input array is empty or null, return an empty array.
        EXAMPLE:
            For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
        NOTES:
    */

// $input = [0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14];
//
// $funzione = countPositivesSumNegatives($input);
// echo $funzione;
//
//
// function countPositivesSumNegatives($input) {
//     if (empty($input)) {
//         return [];
//     }
//
//     $count_positive = 0;
//     $sum_negative = 0;
//     foreach ($input as $key => $value) {
//         if ($value > 0) {
//             $count_positive += 1;
//         } else {
//             $sum_negative += $value;
//         }
//     }
//
//     return [$count_positive, $sum_negative];
// }
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

// $haystack = ['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false];
//
// $funzione = findNeedle($haystack);
// echo $funzione;
//
//
// function findNeedle($haystack) {
//     if ($haystack === null) {
//         return null;
//     }
//
//     $position_needle = array_search('needle', $haystack);   // since the keys of the array are equal to the normal index I can use array_search to get the position
//
//     if ($position_needle) {
//         return 'found the needle at position ' . $position_needle;
//     }
// }
//-----------------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------------
    /* 18. Square(n) Sum

        >Create a funciton so that it squares each number passed into it and then sums the results together.
        EXAMPLE:
            given [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
        NOTES:
    */

// $numbers = [0, 3, 4, 5];
//
// $funzione = square_sum($numbers);
// echo $funzione;
//
//
// function square_sum($numbers) : int {
//     $square_sum = 0;
//     foreach ($numbers as $key => $value) {
//         $square_sum += pow($value, 2);
//     }
//
//     return $square_sum;
// }
//-----------------------------------------------------------------------------------------------------



?>
