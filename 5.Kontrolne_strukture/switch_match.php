<?php

$variable = 3; //ispisati će se srijeda, ako stavimo 9 ispisati će se nezz koji je dan

switch ($variable) {
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
        echo 'Srijeda';
            break;
    case 4:
        echo 'Četvrtak';

    default:
        echo 'Neznam koji je dan.';
        break;
}

$variable = 'uto';

switch ($variable) {
    case 'pon':
        echo 'Ponedjeljak';
        break;
    case 'uto':
        echo 'Utorak';
        break;
    case 'sri':
        echo 'Srijeda';
            break;
    case 'cet':
        echo 'Četvrtak';
            break;

    default:
        echo 'Neznam koji je dan.';
        break;
}

switch ($variable) {  //primjer falling through
    case 'pon':
    case 'uto':
    case 'sri':
        echo 'Prvi dio tjedna.';
            break;
    case 'cet':
    case 'pet':
    case 'sub':
        echo 'Drugi dio tjedna.';
            break;
    case 'ned':
        echo 'Nedjelja';
            break;
    default:
        echo 'Neznam koji je dan.';
        break;
    }



$dan = match ($variable) { // ili echo = = match ($variable)
    'pon' => 'ponedjeljak', //ovdje moze biti array, funkcija, objekt, putanja do nekog file-a...
    'uto' => 'utorak',
    'sri' => 'srijeda',
    default => 'ne znam koji je dan'
};
echo $dan;