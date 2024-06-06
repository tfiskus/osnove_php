<?php

// napraviti funkciju koja prima ime,prezime (pErO,pErIc) i kao rezzltata vraća P. Perić

function formatName(string $name)
{
    $nameArray = explode(',', $name);

    $name = $nameArray[0];
    $surname = $nameArray[1];
    $surname = ucfirst(mb_strtolower($surname));

    $firstLetter = substr($name, 0, 1); // primjer s 'tena', 2 , 1
    $firstLetter = mb_strtoupper($firstLetter);

    return "$firstLetter. $surname";

    //prettyPrint($nameArray);
    

}
$formattedName = formatname('pErO,pErIc');

echo $formattedName;

function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
}