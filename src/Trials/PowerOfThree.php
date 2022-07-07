<?php

namespace Classes\Trials;

class PowerOfThree
{
    public function isPowerOfThree(int $num): bool
    {
        // If $num equals 1 = 3^0
        if ($num === 1) {
            return true;
        }

        // If $num is even number it cannot be power of 3
        if (($num % 2) === 0) {
            return false;
        }

        // If $num %3 is not 0 -  it cannot be power of 3
        if (($num % 3) !== 0) {
            return false;
        }
        for ($x = (int)($num / 3); $x > 1; $x = (int)($x / 3)) {
            if (($x % 3) !== 0) {
                return false;
            }
        }
        return true;
    }
}
