<?php

namespace Classes\Trials;

class Brackets
{
    public function isBalanced(string $str): bool
    {
        $len = strlen($str);
        if ($len === 0) {
            return true;
        }
        if ($len === 1) {
            return false;
        }
        if (($len % 2) > 0) {
            // Not even number of brackets
            return false;
        }
        $closeBracketPos = strpos($str, ')');
        $openBracketPos = strpos($str, '(');
        if ($closeBracketPos === 0) {
            return false;
        }
        if (($closeBracketPos === false) || ($openBracketPos === false)) {
            return false;
        }
        return $this->isBalanced(str_replace('()', '', $str));
    }
}
