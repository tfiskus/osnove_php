<?php

$a = 15;
$b = 2;
$c = 'tena';
$d = 'uci';

echo "ispisi sve artmeticke operatore za varijable a i b";

echo $a + $b; // 17
echo $a - $b; // 13
echo $a * $b; // 30
echo $a / $b; // 7.5
echo $a % $b; // 1

echo "------------------------------------------------------------";

echo "Nad varijablama c i d primijeni operator konkatenacije i dobivenu vrijednost dodijeli varijabli f.";
echo "Ispisi vrijednost varijable f.";

$f = $c . $d;
echo $f;

echo "Nad varijablama a i b primijeni jedan od kombiniranih operatora dodjele i ispisi rezultat";

echo $b -= $a; // $b = $b - $a >> -13

echo "Nad varijablama a i b primijeni operator usporedbe (veće od) i pomocu var_dump() funkcije ispisi rezultat";

echo var_dump ( $a > $b );

echo "Nad varijablom a primijeni operator inkrementa i istovremeno ispisi rezultat";

echo $a = $a++; // 15

echo "Nad varijablom b primijeni operator dekrementa i istovremeno ispisi rezultat";

echo $b = --$b; // -14 jer pamti zadnju kao -13

echo "---------------THE END -----------------";






