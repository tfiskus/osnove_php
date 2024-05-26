<?php
    
    echo "ASSIGMENT OPERATORS";

    // the basic assigment opeartor is "="
    // it is not "equal to" but "gets set to"

    $a = ($b = 4) + 5; 
    // $a is equal to 9 now, and $b has been set to 4
    echo $a;
    echo $b;

    echo "COMBINED OPERATORS ili KOMBINIRANI OPERATORI";

    $a = 15;
    $b = 10;
    
    echo $a -= $b; // Ekvivalent $a = $a - $b
    echo $a += $b; // Ekvivalent $a = $a + $b
    echo $a *= $b; // Ekvivalent $a = $a * $b
    echo $a /= $b; // Ekvivalent $a = $a / $b
    echo $a %= $b; // Ekvivalent $a = $a % $b

    echo "PRIMJER STRING";
    echo $a .= $b; // Ekvivalent $a = $a . $b

    $ime = 'Tena';
    $razmak = '<br>';
    $prezime = 'Fiskus';

    $ime .= $razmak; // -> 'Tena'
    $ime .= $prezime; // -> 'Tena Fiskus'
    echo $ime;


    $a = 3;
    $a += 5; // sets $a to 8;  $a = $a + 5;

    $b = "Hello ";
    $b .= "There!"; // sets $b to "Hello There!", 
    // just like $b = $b . "There!";
    