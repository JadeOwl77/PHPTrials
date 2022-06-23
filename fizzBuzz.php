<?php

function fizzBuzz(int $begin, int $end)
{
    if ($begin > $end) {
        return;
    }
    for ($i = $begin; $i <= $end; $i++) {
        $divThree = ($i % 3) === 0;
        $divFive = ($i % 5) === 0;
        if ($divThree && $divFive) {
            echo 'FizzBuzz ';
        } elseif ($divThree) {
            echo 'Fizz ';
        } elseif ($divFive) {
            echo 'Buzz ';
        } else {
            echo "$i ";
        }
    }
    echo PHP_EOL;
}

// Tests
fizzBuzz(11, 20);
fizzBuzz(20, 11);
fizzBuzz(1, 15);
fizzBuzz(0, 10);
fizzBuzz(-10, 0);
