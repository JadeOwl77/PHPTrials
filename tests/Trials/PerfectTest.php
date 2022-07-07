<?php

use PHPUnit\Framework\TestCase;

class PerfectTest extends TestCase
{
    /**
     * @dataProvider perfectProvider
    */
    public function testPerfect(int $num, bool $expected): void
    {
        $perfect = new \Classes\Trials\Perfect();
        $res = $perfect->isPerfect($num);
        self::assertTrue($expected === $res);
    }

    public function perfectProvider(): array
    {
        return [
            [6, true],
            [28, true],
            [496, true],
            [8128, true],
            [33550336, true],
            [25, false],
            [26, false],
            [50, false],
        ];
    }
}
