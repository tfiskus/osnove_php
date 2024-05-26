<?php

$empty_array = [];
$names = ['Alex', 'FIlip', 'Marko'];

$is_variable_empty = empty($empty_array); //empty($var): bool
var_dump($is_variable_empty); // bool(true)

$is_variable_empty = empty($names); //empty($var): bool
var_dump($names); // bool(false)

$empty_array = [];
$names = ['Filip', 'Marko', 'Alex', 'Jura'];
$names2 = ['Ivan', 'Luka'];

// empty and isset funkcije
$is_variable_empty = empty($names);
var_dump($is_variable_empty);
echo '<br>';
var_dump(isset($empty_array)); //isset($var, ...$vars): bool
// isset >> Determine if a variable is considered set, this means if a variable is declared and is different than `null` .
// za $empty_array vraća bool(true) jer je varijabla postavljena, nema veze što je prazni niz
// u slučaju da je postavljen NULL kao vrijednost varijable će vratiti false isto kao i da varijabla uopće ne postoji

echo '-----------------------------------------------------------------------------------------------------------------';

// in_array funkcija
echo '<br>';
var_dump(in_array('Alex', $names));

//function in_array(mixed $needle, array $haystack, bool $strict = false) :bool

//Checks if a value exists in an array : ŠTO tražiš GDJE tražiš?
// Searches for needle in haystack using loose comparison unless strict is set. 
// traži iglu u hrpi sijena

// $needle: The searched value. Note : If needle is a string, the comparison is done in a case-sensitive manner.
// $haystack: The array.


// array_search funkcija
echo '<br>';
var_dump(array_search('Alex', $names)); 

// isto kao i in_array ali umjesto logičke vrijednosti vraća ključ tamo gdje se nalazi vrijednost koju tražimo
// vraća false ako vrijednosti nije pronađena odnosno ne postoji
// ispisati će FIRST CORRESPODING key odnosno ako imamo 'Alex' 'Alex' zaustaviti će se samo na prvom


echo '-----------------------------------------------------------------------------------------------------------------';

// sortiranje
// ako su stringovi prema abecedi !

// primjer $names = ['Filip', 'Marko', 'Alex', 'Jura']'

sort($names); // ascending order/sort as per value
// sortiranje uzlazno
// resetira ključeve
/*  
    [0] => Alex
    [1] => Filip
    [2] => Jura
    [3] => Marko
*/

rsort($names); // desceding order/sort as per value
// sortiranje SILAZNO
// resetira ključeve

/*
    [0] => Marko
    [1] => Jura
    [2] => Filip
    [3] => Alex
*/

asort($names); // ascending order/sort as per value
// sortiranje uzlazno
// zadržava ključeve kako jesu, bez resetiranja

/*
    [3] => Alex
    [2] => Filip
    [1] => Jura
    [0] => Marko
*/

ksort($names); // ascending order/sort as per key
// sortiranje uzlazno po ključevima

/*
    [0] => Filip
    [1] => Marko
    [2] => Alex
    [3] => Jura
*/


echo '<pre>';
print_r($names);
echo '</pre>';
// push and pop and shift
array_push($names, 'Mosa'); //isto kao i $names[] = 'Angelo'; 

echo '<pre>';
print_r($names);
echo '</pre>';

echo '<br>';
$last_element = array_pop($names); //ne znamo niti index niti vrijednost
echo $last_element;
echo '<br>';

echo '<pre>';
print_r($names);
echo '</pre>';

$first_value = array_shift($names); //Shift an element off the beginning of array
// maknuo prvi index i posložio po redu preostale
echo $first_value;
echo '<br>';
echo '<pre>';
print_r($names);
echo '</pre>';

// array_keys, array_values and array_merge
var_dump(array_keys($names));
/*
    [0]  => int(0)
    [1]  => int(1)
    [2]  => int(2)
    [3]  => int(3)
*/

var_dump(array_values($names));
echo '<br>';

/*array(4) {
  [0]=> string(5) "Filip"
  [1]=> string(5) "Marko"
  [2]=> string(4) "Alex"
  [3]=> string(4) "Jura"
}
*/

var_dump(count($names));
// int(4)


$names = ['Filip', 'Marko', 'Alex', 'Jura'];
$names2 = ['Tena', 'Maja', 'Anja', 'Julija'];

$merged = array_merge($names, $names2);
var_dump($merged);

/*
array(8) {
  [0]=> string(5) "Filip"
  [1]=> string(5) "Marko"
  [2]=> string(4) "Alex"
  [3]=> string(4) "Jura"
  [4]=> string(4) "Tena"
  [5]=> string(4) "Maja"
  [6]=> string(4) "Anja"
  [7]=> string(6) "Julija"
}
*/