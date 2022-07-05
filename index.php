<?php
include_once ".\\src\\addDigitsClass.php";
include_once ".\\src\\binarySumClass.php";
include_once ".\\src\\bracketsClass.php";
include_once ".\\src\\fibonachiClass.php";
include_once ".\\src\\fizzBuzzClass.php";
include_once ".\\src\\perfectClass.php";
include_once ".\\src\\powerOfThreeClass.php";
include_once ".\\src\\ticketClass.php";

$addDigits = new AddDigitsClass();
$binarySum = new BinarySumClass();
$brackets = new BracketsClass();
$fibonachi = new FibonachiClass();
$fizzbuzz = new FizzBuzzClass();
$perfect = new PerfectClass();
$power = new PowerOfThreeClass();
$ticket = new TicketClass();

// Tests AddDigits
echo PHP_EOL, "Add Digits Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = [0, 1, 9, 10, 12, 38, 123, 321, 333, 444, 555, 123456789, 987654321];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "Number: ", $arr[$i], " Sum of digits: ", $addDigits->addDigits($arr[$i]), PHP_EOL; 
}

// Tests Binary Sum
echo PHP_EOL, "Binary Sum Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = [['10', '1'], ['1101', '101'], ['1', '1'], ['0', '0'], ['010', '010'], ['111', '111'], ['111', '100'], ['111', '001']];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "Binary sum of: ", $arr[$i][0], " and ", $arr[$i][1], " is: ", $binarySum->binarySum($arr[$i][0], $arr[$i][1]), PHP_EOL; 
}

// Tests
echo PHP_EOL, "Balanced Brackets Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = [')))(', '(())', '((())', '', '()', ')(', ')()(', '((((', '))))', '(()()(', '(()', '())', '()()', '(((((())))))', '(((((()))))', '(((((()())))))'];
for ($i = 0 ; $i < count($arr) ; $i++) {
    echo "Is '", $arr[$i] , "' balanced? ", $brackets->isBalanced($arr[$i]) ? 'true' : 'false' , PHP_EOL;
}

// Test
// More then 92 - result in Fatal error due to int overflow
echo PHP_EOL, "Fibonachi Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
for ($i = 0; $i <= 92; $i++) {
    echo "i = ", $i, " fib($i) = ", $fibonachi->fib($i), PHP_EOL;
}

// Tests
echo PHP_EOL, "FizzBuzz Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = [[11, 20], [20, 11], [1, 15], [0, 10], [-10, 0]];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "FizzBuzz(", $arr[$i][0], ", ", $arr[$i][1], ") : ", $fizzbuzz->fizzBuzz($arr[$i][0], $arr[$i][1]), PHP_EOL; 
}

// Tests
// 6, 28, 496, 8128, 33550336 - are perfect numbers
echo PHP_EOL, "Perfect Numbers Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = [6, 28, 496, 8128, 33550336, 25, 26, 500];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "Is $arr[$i] perfect? ", $perfect->isPerfect($arr[$i]) ? 'true' : 'false', PHP_EOL;
}

// Tests
echo PHP_EOL, "Power Of Three Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
// Case of number is power of 3
for ($i = 0; $i < 10; $i++) {
    echo "is " . 3 ** $i . " is power of 3? ", $power->isPowerOfThree(3 ** $i) ? 'true' : 'false', PHP_EOL; // → true
}
// Case of number is  not power of 3
$arr = [4, 10, 21, 30, 12, 2, 11, 18, 24, 33, 66, 13];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "is " . $arr[$i] . " is power of 3? ", $power->isPowerOfThree($arr[$i]) ? 'true' : 'false', PHP_EOL; // → true
}

// Tests
echo PHP_EOL, "Lucky Ticket Trial", PHP_EOL, "-------------------------------------", PHP_EOL; 
$arr = ['385916', '231002', '1222', '054702', '00', '1', '12', '123456789987654321'];
for ($i = 0, $count = count($arr); $i < $count; $i++) {
    echo "Is ticket $arr[$i] happy? ", $ticket->isHappy($arr[$i]) ? 'true' : 'false', PHP_EOL;
}
