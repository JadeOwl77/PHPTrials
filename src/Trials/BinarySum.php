<?php

namespace Classes\Trials;

class BinarySum
{
    public function binarySum(string $a, string $b): string
    {
        $ai = bindec($a);
        $bi = bindec($b);
        return decbin($ai + $bi);
    }
}
