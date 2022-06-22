<?php

function fib(int $n): int
{
    static $fibonachi = [0, 1];
    if ($n >= count($fibonachi)) {
        $fibonachi[$n] = fib($n - 1) + fib($n - 2);
    }
    return $fibonachi[$n];
}

// Test
// More then 92 - result in Fatal error due to int overflow
for ($i = 0; $i <= 92; $i++) {
    echo "i = ", $i, " fib($i) = ", fib($i), PHP_EOL;
}
