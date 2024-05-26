<?php

echo "PRIMJERI PREINCREMENT-a I POSTINCREMENT-a";
$a = 5;
$b = 10;

echo $a++; // 5
echo $a; // 6

echo --$b; // 9
echo $b; // 9

echo ($a++)-(--$b); // 6-8 = -2

echo ($a++); // zadnja vrijednost je 6 uvećana za 1 pa = 7
// da je echo (++$a); // onda bi bilo executano 8

echo (--$b); // zadnja vrijednost je bila 8 
// stoga je odmah umanjena za 1; 8-1 = 7

echo ($a++)-(--$b); // 8-6 = 2 
// zadnja vrijednost je bila 7, bez execute varijable a 
// se odmah pribraja +1

echo "PRIMJERI KOMBINIRANIH OPERATORA";

$a = 20;
$b = 3;
echo $a += $b; // $a = $a + $b >> a=23; b=3
// rezultat ispisa echo $a >> 23, echo $b >> 3

$voce = 'jagode';
$veznik = 'i';
$slatkis = 'cokolada';

$voce .= $veznik; // $voce = $voce . $veznik >> 'jagodei'
$voce .= $slatkis; // $voce = $voce . $slatkis >> 'jagodeicokolada'
echo $voce;

$b = "Hello ";
$b .= "There!"; // sets $b to "Hello There!", 
// just like $b = $b . "There!";



