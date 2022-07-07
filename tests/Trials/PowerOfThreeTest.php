<?php

use PHPUnit\Framework\TestCase;

class PowerOfThreeTest extends TestCase
{
    /**
     * @dataProvider powerOfThreeProvider
    */
    public function testPowerOfThree(int $num, bool $expected): void
    {
        $powerOfThree = new \Classes\Trials\PowerOfThree();
        $res = $powerOfThree->isPowerOfThree($num);
        self::assertTrue($expected === $res);
    }

    public function powerOfThreeProvider(): array
    {
        return [
            [1, true],
            [3, true],
            [9, true],
            [27, true],
            [81, true],
            [243, true],
            [729, true],
            [2187, true],
            [6561, true],
            [19683, true],
            [4, false],
            [10, false],
            [21, false],
            [30, false],
            [12, false],
            [2, false],
            [11, false],
            [18, false],
            [24, false],
            [33, false],
            [66, false],
            [13, false],
        ];
    }
}
