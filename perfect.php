<?php

// Все чётные совершенные числа в двоичной записи содержат сначала {\displaystyle p}p единиц, за которыми следует {\displaystyle p-1}p-1 нулей (следствие из их общего представления).
// from https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D1%87%D0%B8%D1%81%D0%BB%D0%BE#%D0%A1%D0%B2%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0

function isPerfect(int $num): bool
{
    $bin = decbin($num);
    $zero_pos = strpos($bin, '0');
    $one_count = substr_count($bin, '1');
    $zero_count = substr_count($bin, '0');
    return (($one_count - 1) === $zero_count ) && ($zero_pos === $one_count);
}

// Tests
// 6, 28, 496, 8128, 33550336 - are perfect numbers
$arr = [6, 28, 496, 8128, 33550336, 25, 26, 500];
$count = count($arr);
for ($i = 1 ; $i < $count ; $i++) {
    echo "Is $arr[$i] perfect? ", isPerfect($arr[$i]) ? 'true' : 'false', PHP_EOL ;
    // isPerfect($i);
}
