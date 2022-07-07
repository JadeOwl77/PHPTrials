<?php

namespace Classes\Trials;

class Fibonachi
{
    private static $fibonachi = [0, 1];
    public function fib(int $n): int
    {
        static $fibonachi = [0, 1];
        if ($n >= count($fibonachi)) {
            $fibonachi[$n] = $this->fib($n - 1) + $this->fib($n - 2);
        }
        return $fibonachi[$n];
    }
}
