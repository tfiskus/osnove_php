<?php

$a = 10;
$b = 5;
$c = '10';
$d = 10;
$e = 9;
$f = 11;

var_dump($a > $b); //mala fuknkija koja uvijek vraća true ili false
var_dump($a < $b); // false
var_dump($a <= $f); // true jer je jednako; ne postoji <== ili >==
var_dump($a >= $e); // false

//primjer koristenja: imamo istrazivanje za punoljetne osobe, stavili smo konstantu punoljenosti da je 18 
//onda za usera provjeravamo je li mu dob veca ili jednaka 18

var_dump($a == $b); //false
var_dump($a == $c); //true, provjerava da li su vrijednosti iste
var_dump($a === $c); //false, varijabla a nije identicna varijabli c / vrijednost i tip podatka nisu isti
var_dump($a === $d); //true, varijable a je identicna varijabli d / vrijednost i tip podatka su identicni

// ako povezujemo dva integera php će napraviti string
// ako povezujemo integer sa stringom, string pretvara u integer i daje true/false
// = jednako; == je jednako; === je jednako jednako/identicno,doslovce

//operator razlicito
var_dump($a != $c); //false jer usporedujemo vrijednosti, ne i tip podatka
var_dump($a !== $c); //true
var_dump($a !== $d); //false



