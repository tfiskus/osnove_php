<?php

function addNumbers(int $a, int $b, bool $printResult): int
{
        $sum = $a + $b;

        if ($printResult === true) {
            echo 'This results is: ' . $sum;

        }
        
        return $sum;
}

addNumbers(3, 4, true);