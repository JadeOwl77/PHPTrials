<?php

namespace Classes\Trials;

class AddDigits
{
    public function addDigits(string $num): int
    {
        $sum = 0;
        $len = strlen($num);
        for ($i = 0; $i < $len; $i++) {
            $sum = $sum + $num[$i];
        }
        if (strlen($sum) > 1) {
            return $this->addDigits($sum);
        }
        return $sum;
    }
}
