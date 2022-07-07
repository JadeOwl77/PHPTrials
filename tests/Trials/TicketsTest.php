<?php

use PHPUnit\Framework\TestCase;

class TicketsTest extends TestCase
{
    /**
     * @dataProvider ticketsProvider
    */
    public function testTickets(string $ticket, bool $expected): void
    {
        $tickets = new \Classes\Trials\Ticket();
        $res = $tickets->isHappy($ticket);
        self::assertTrue($expected === $res);
    }

    public function ticketsProvider(): array
    {
        return [
            ["385916", true],
            ["231002", false],
            ["1222", false],
            ["054702", true],
            ["00", true],
            ["1", false],
            ["12", false],
            ["123456789987654321", true],
        ];
    }
}
