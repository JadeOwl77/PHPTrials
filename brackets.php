<?php

function isBalanced(string $str): bool
{
    if ((strlen($str) % 2) > 0) {
        // Not even number of brackets
        return false;
    } 
    if (strlen($str) === 0) {
        return true;
    } elseif (strlen($str) === 1) {
        return false;
    } elseif ((strpos($str, ')') === false) || (strpos($str, '(') === false)) {
        return false;
    } elseif (strpos($str, ')(') === 0) {
        return false;
    }
    $count = 1;
    return isBalanced(str_replace("()", "", $str, $count));
}

// Tests
$arr = ['(())', '((())', '', '()', ')(', ')()(', '((((', '))))', '(()()(', '(()', '())', '()()', '(((((())))))', '(((((()))))', '(((((()())))))'];
for ($i = 0 ; $i < count($arr) ; $i++) {
    echo "Is '", $arr[$i] , "' balanced? ", isBalanced($arr[$i]) ? 'true' : 'false' , PHP_EOL;
}
