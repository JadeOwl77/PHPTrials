<?php

function digitsSum(string $number): int
{
    $length = strlen($number);
    $sum = 0;
    for ($i = 0; $i < $length; $i++) {
        $sum = $sum + $number[$i];
    }
    return $sum;
}

function isHappy(string $ticket): bool
{
    $length = strlen($ticket);
    if (($length % 2) !== 0) {
        // Ticket number length is not even
        return false;
    }
    $half = ($length / 2);
    $firstHalf = substr($ticket, 0, $half);
    $secondHalf = substr($ticket, $half, $length);
    return digitsSum($firstHalf) === digitsSum($secondHalf);
}

// Tests
$arr = ['385916', '231002', '1222', '054702', '00', '1', '12', '123456789987654321'];
$count = count($arr);
for ($i = 0; $i < $count; $i++) {
    echo "Is ticket $arr[$i] happy? ", isHappy($arr[$i]) ? 'true' : 'false', PHP_EOL;
}
