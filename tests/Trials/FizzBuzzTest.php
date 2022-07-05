<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider fizzBuzzProvider
    */
    public function testFizzBuzz(int $start, int $end, string $expected): void
    {
        $fizzBuzz = new \Classes\Trials\FizzBuzz();
        $this->expectOutputString($expected);
        $fizzBuzz->fizzBuzz($start, $end);
    }

    public function fizzBuzzProvider(): array
    {
        return [
            [11, 20,  "11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz "],
            [20, 11,  ""],
            [1, 15,  "1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz "],
            [0, 10,  "FizzBuzz 1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz "],
            [-10, 0,  "Buzz Fizz -8 -7 Fizz Buzz -4 Fizz -2 -1 FizzBuzz "],
        ];
    }
}
