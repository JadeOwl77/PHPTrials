<?php

class ticketClass
{
    private function digitsSum(string $number): int
    {
        $length = strlen($number);
        $sum = 0;
        for ($i = 0; $i < $length; $i++) {
            $sum = $sum + $number[$i];
        }
        return $sum;
    }
    
    public function isHappy(string $ticket): bool
    {
        $length = strlen($ticket);
        if (($length % 2) !== 0) {
            // Ticket number length is not even
            return false;
        }
        $half = ($length / 2);
        $firstHalf = substr($ticket, 0, $half);
        $secondHalf = substr($ticket, $half, $length);
        return $this->digitsSum($firstHalf) === $this->digitsSum($secondHalf);
    }
}
