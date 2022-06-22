<?php

function binarySum(string $a, string $b): string 
{
    $ai = bindec($a);
    $bi = bindec($b);
    return decbin($ai + $bi);
}

// Tests
echo binarySum('10', '1'),  PHP_EOL ; // 11
echo binarySum('1101', '101') ,  PHP_EOL ; // 10010
echo binarySum('1', '1'),  PHP_EOL ; // 10
echo binarySum('0', '0') ,  PHP_EOL ; // 0
echo binarySum('010', '010'),  PHP_EOL ; // 10
echo binarySum('111', '111') ,  PHP_EOL ; // 0
echo binarySum('111', '100') ,  PHP_EOL ; // 0
echo binarySum('111', '001') ,  PHP_EOL ; // 0
