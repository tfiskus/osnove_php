<?php

for ($i=0; $i <= 10 ; $i++) { 
    // izraz za izvrsavanje
    echo "$i ";
}

echo '<br><br>';

for ($i=0; $i < 10 ; $i++) { 
    // izraz za izvrsavanje
    echo "$i ";
}

echo '<br><br>';

for ($i=0; $i < 10 ; $i =+ 2) { 
    // izraz za izvrsavanje
    echo "$i ";
}

echo '<br><br>';

for ($i=20; $i >= 10 ; $i--) { 
    // izraz za izvrsavanje
    echo "$i ";   // ispiši i pa smanji za 1 i izađi iz petlje, prvo izvrši body petlje a tek onda expression
}

echo '<br><br>';

for ($i=0; $i <= 50 ; $i++) {   // vrti se do broja 50 
    echo "$i ";                  // ispisati će 0 1 2 3 4 5

        if($i === 5){           //kada dodeš da je interator identično broj 5
            echo "broj 5 je pronadjen";   //ispiši mi ""
            break;                          //izađi iz petlje
        }
    
}

echo '<br><br>';

for ($i=0; $i <= 10 ; $i++) {   // vrti se do broja 50 

        if($i === 5){           //dok nađeš broj 5
            continue;           //preskoči / vrti se dalje do broja 10, koristi se samo u petljama
        }         
        
        echo "$i ";
}


echo '<br><br>';

for ($i=1; $i <= 10 ; $i++) {           //ide u prvu interaciju pa onda slijedi druga for funckija u bodyju petlje
        echo "$i -";                    // ovako vidiš što koja petlja formira
    for ($j=1; $j <=10 ; $j++) {        //kad druga završi prva tek ide u drugu interaciju, nakon toga se druga petlja vrti opet 10x
        echo "$i ";
    }
    echo '<br>';
}
// za nested for se broj interacija kvadrira pa je 10^2=100 tj ispisati će 100 rezultata

$names = ['Harry', 'Ron', 'Hermione']; //logično je da petlja počinje od 0 jer i array počinje / 0 1 2

for ($i=0; $i < count($names); $i++) { 
    $names [$i] . ', '; //pristupamo pomoću uglatih zagrada ključevima arraya
}