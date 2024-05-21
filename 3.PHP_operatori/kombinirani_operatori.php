<?php
    $a = 15;
    $b = 10;
    
    echo $a -= $b; // Ekvivalent $a = $a - $b
    echo $a += $b; // Ekvivalent $a = $a + $b
    echo $a *= $b; // Ekvivalent $a = $a * $b
    echo $a /= $b; // Ekvivalent $a = $a / $b
    echo $a %= $b; // Ekvivalent $a = $a % $b


    $ime = 'Tena';
    $razmak = '<br>';
    $prezime = 'Fiskus';

    $ime .= $razmak; // -> 'Tena'
    $ime .= $prezime; // -> 'Tena Fiskus'
    echo $ime;
    