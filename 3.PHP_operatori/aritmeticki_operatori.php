<?php

    $a= 15;
    $b= -5;
    $c = $a - $b;

    echo $a - $b - 25 + 66;
    echo '<br>';

    echo $a - $b;
    echo '<br>';
    echo $a + $b;
    echo '<br>';
    echo $a * $b;
    echo '<br>';
    echo $a / $b;
    echo '<br>';

    //operator Modulo -> vraca ostatak od dijeljenja
    echo 15 % -5;
    echo '<br>'; 
    echo 15 / -5; 
    echo '<br>';
    echo $a % $b;
    echo '<br>';
    echo 12 % 4; //nema ostatka dijeljenja
    echo '<br>';
    echo 11 % 4; //2*4=8; 3 do 11 je ostatak od dijeljenja
    echo '<br>';
    

    //operator spajanja stringova
    
    $a = 'ALGEBRA -';
    $B ='php';
    $C ='osnove';

    // konkatenacija vise stringova
    echo $a.$b.$c;
    var_dump($a.$b.$c);

