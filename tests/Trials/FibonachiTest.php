<?php

use PHPUnit\Framework\TestCase;

class FibonachiTest extends TestCase
{
    /**
     * @dataProvider fibonachiProvider
    */
    public function testFibonachi(int $num, int $expected): void
    {
        $fibonachi = new \Classes\Trials\Fibonachi();
        $res = $fibonachi->fib($num);
        self::assertTrue($expected === $res);
    }

    public function fibonachiProvider(): array
    {
        return[
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [8, 21],
            [9, 34],
            [10, 55],
            [11, 89],
            [80, 23416728348467685],
        ];
    }
}
