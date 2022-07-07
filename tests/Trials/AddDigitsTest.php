<?php

use PHPUnit\Framework\TestCase;

class AddDigitsTest extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
    */
    public function testAddDigits(string $str, int $expected): void
    {
        $addDigits = new Classes\Trials\AddDigits();
        $sum = $addDigits->addDigits($str);
        self::assertTrue($expected === $sum);
    }

    public function addDigitsProvider(): array
    {
        return [
            ['0', 0],
            ['1', 1],
            ['9', 9],
            ['10', 1],
            ['12', 3],
            ['38', 2],
            ['123', 6],
            ['321', 6],
            ['333', 9],
            ['444', 3],
            ['555', 6],
            ['123456789', 9],
            ['987654321', 9],
        ];
    }
}
