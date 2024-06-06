<?php 

$books = file_get_contents('knjige.json');

var_dump($books);

echo $books;

$books = json_decode($books, true);   //pretvaraju json string u php niz

var_dump($books);


