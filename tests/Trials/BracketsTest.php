<?php

use PHPUnit\Framework\TestCase;

class BracketsTest extends TestCase
{
    /**
     * @dataProvider bracketsProvider
    */
    public function testBrackets(string $brackets, bool $expected): void
    {
        $balancedBrackets = new \Classes\Trials\Brackets();
        $res = $balancedBrackets->isBalanced($brackets);
        self::assertTrue($expected === $res);
    }

    public function bracketsProvider(): array
    {
        return [
            [')))(', false],
            ['(())', true],
            ['((())', false],
            ['', true],
            ['()', true],
            [')(', false],
            [')()(', false],
            ['((((', false],
            ['))))', false],
            ['(()()(', false],
            ['(()', false],
            ['())', false],
            ['()()', true],
            ['(((((())))))', true],
            ['(((((()))))', false],
            ['(((((()())))))', true]
        ];
    }
}
