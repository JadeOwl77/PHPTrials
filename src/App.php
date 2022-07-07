<?php

namespace Classes;

class App
{
    public function runOnce()
    {
        (new Trials\AddDigits())->addDigits("10");
        (new Trials\BinarySum())->binarySum("00", "11");
        (new Trials\Brackets())->isBalanced("()");
        (new Trials\Fibonachi())->fib(3);
        (new Trials\FizzBuzz())->fizzBuzz(1, 15);
        (new Trials\Perfect())->isPerfect(6);
        (new Trials\PowerOfThree())->isPowerOfThree(3);
        (new Trials\Ticket())->isHappy("123321");
    }
}
