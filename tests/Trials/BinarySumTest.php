<?php

use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    /**
     * @dataProvider binarySumProvider
    */
    public function testBinarySum(string $a, string $b, string $expected): void
    {
        $binarySum = new \Classes\Trials\BinarySum();
        $sum = $binarySum->binarySum($a, $b);
        self::assertTrue($expected === $sum);
    }

    public function binarySumProvider(): array
    {
        return [
            ['10', '1', '11'],
            ['1101', '101', '10010'],
            ['1', '1', '10'],
            ['0', '0', '0'],
            ['010', '010', '100'],
            ['111', '111', '1110'],
            ['111', '100', '1011'],
            ['111', '001', '1000']
        ];
    }
}
