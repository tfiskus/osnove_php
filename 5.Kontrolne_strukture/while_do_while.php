<?php

$i = 5;

while ($i <= 10) {
    echo "$i";           //izvrtjeti će beskonačno broj 5
}


echo '<br><br>';

$i = 1;
    
while ($i <= 10) {
    echo "$i";
    $i++; // $i = $i + 1
}

echo '<br><br>';

$i = 2;

do {
    echo "$i "
    $i += 2;          // 2 4 6 8 10 .... sve do 10
} while ($i <= 100);  // uvjet do kojeg broja se vrti petlja



