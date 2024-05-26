<?php

$names = ['Alex', 'Filip', 'Marko'];
// $names[5] = 'Robert'; -> ovo ne raditi
$names[] = 'Angelo'; //dodajemo novo ime

echo '<pre>';
print_r( $names);
echo '</pre>';

$fruits = [
    'ime' => 'Banana',
    'cijena' => '12 EUR',
    'klasa' => 1,
];
$fruits['masa'] = 2; //dodavanje novog ključa, koristiš samo =
$fruits['klasa'] = 3; //dodavanje nove vrijednosti postojećem ključu, koristiš samo =
// ovdje ključevi nisu poredani, ali se mogu prema abecednom redu

echo '<pre>';
print_r( $fruits);
echo '</pre>';

// Uklanjanje elementa iz niza
unset($fruits['ime']);

echo '<pre>';
print_r( $fruits);
echo '</pre>';