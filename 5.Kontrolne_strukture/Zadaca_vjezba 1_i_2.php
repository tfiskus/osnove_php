<?php

echo 'VJEŽBA 1';
echo "Definirajte varijable a, b i c te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.";
echo "Koristeci uvjetovani tip kontrolne strukture provjerite je li vrijednost b izmedu a i c.";
echo "Ako je uvjet istinit, ispisite da je b izmedu a i c, a ako je uvjet lazan ispisite da nije.";
echo "Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.";

echo 'Rješenje br. 1:';

$a = 5;
$b = 10;
$c = 15;

if (($b > $a && $b < $c) || ($b > $c && $b < $a)) {
    echo 'b je između a i c';
} else {
    echo 'b nije između a i c';
}


echo 'Rješenje br. 2:';

$a = 5;
$b = 10;
$c = 15;

$d = ($b > $a && $b < $c) || ($b > $c && $b < $a) ? "b je između a i c" : "b nije između a i c";

echo $d;

echo '<br><br>';

echo 'VJEŽBA 2';

$dan = cet
switch ($dan) {
    case 'pon':
        echo 'ponedjeljak';
        break;
    case 'uto':
        echo 'ponedjeljak';
            break;
    case 'sri':
        echo 'srijeda';
            break;
    case 'cet':
        echo 'cetvrtak';
            break;    
    default:
        echo 'vikend';
        break;
}


