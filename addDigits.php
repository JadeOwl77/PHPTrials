<?php

function addDigits(string $num): int
{
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum = $sum + $num[$i];
    }
    if (strlen($sum) > 1) {
        return addDigits($sum);
    }
    return $sum;
}

// Tests
$arr = [0, 1, 9, 10, 12, 38, 123, 321, 333, 444, 555, 123456789, 987654321];
for ($i = 0; $i < count($arr) ; $i++) {
    echo "Number: ", $arr[$i], " Sum of digits: ", addDigits($arr[$i]), PHP_EOL; 
}
