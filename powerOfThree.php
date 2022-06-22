<?php

function isPowerOfThree(int $num): bool 
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

// Tests
// Case of number is power of 3
for ($i = 0; $i < 10; $i++) {
    echo "is " . 3 ** $i . " is power of 3? ", isPowerOfThree(3 ** $i) ? 'true' : 'false', PHP_EOL; // → true
}
// Case of number is  not power of 3
$arr = [4, 10, 21, 30, 12, 2, 11, 18, 24, 33, 66, 13];
$count = count($arr);
for ($i = 0; $i < $count; $i++) {
    echo "is " . $arr[$i] . " is power of 3? ", isPowerOfThree($arr[$i]) ? 'true' : 'false', PHP_EOL; // → true
}
