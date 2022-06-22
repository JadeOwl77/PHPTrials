<?php

function isBalanced(string $str): bool
{
    $len = strlen($str);
    if (($len % 2) > 0) {
        // Not even number of brackets
        return false;
    } 
    $closeBracketPos = strpos($str, ')');
    $openBracketPos = strpos($str, '(');
    if ($len === 0) {
        return true;
    } elseif ($len === 1) {
        return false;
    } elseif (($closeBracketPos === false) || ($openBracketPos === false)) {
        return false;
    } elseif (strpos($str, ')') === 0) {
        return false;
    }
    // $count = 1;
    // return isBalanced(str_replace('()', '', $str, $count));
    return isBalanced(str_replace('()', '', $str));
}

// Tests
$arr = [')))(', '(())', '((())', '', '()', ')(', ')()(', '((((', '))))', '(()()(', '(()', '())', '()()', '(((((())))))', '(((((()))))', '(((((()())))))'];
for ($i = 0 ; $i < count($arr) ; $i++) {
    echo "Is '", $arr[$i] , "' balanced? ", isBalanced($arr[$i]) ? 'true' : 'false' , PHP_EOL;
}
