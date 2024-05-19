<?php

/*Definirajte nekoliko različitih varijabli i dodijelite im sljedeće tipove podataka:
cijeli broj tj. INTEGER
realni broj tj. FLOATING-POINT NUMBER
tekstualni podatak tj. STRING
logicka vrijednost tj. BOOLEAN

Ispisite definirane varijable.

Definirajte nekoliko konstanti koje poznajete (npr. pi) te ih zatim ispisite.

Definirajte varijablu a i dodijelite joj neku vrijednost. 
Zatim definirajte varijablu b i referencirajte je na varijablu a. Ispisite varijablu b. 
Zatim promijenite vrijednost u varijabli a i ponovno ispisite varijablu b.*/
echo '<br>';

$x = 2;
echo "Example for integer: $x";
echo '<br>';

$y = 0.33;
echo "Example for floating-point number: $y";
echo '<br>';

$str = 'Tena pise domacu zadacu.';
echo "Example for string: $str";
echo '<br>';

$xx = 5;
if($true <= 8) {echo "This is true";}
else{echo "This is False";}
echo '<br>';

$xx = 5;
if($true==8) {echo "This is true";}
else{echo "This is False";}
echo '<br>';

$a = 10;
$b = $a;
echo "Referencija varijable b na varijablu a: $b";
echo '<br>';

$a = 12;
$b = &$a;
echo "Promjenu vrijednosti varijable a prati varijabla b: $b";
echo '<br>';