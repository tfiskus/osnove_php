<?php
    // Inicijalizacija praznog niza
    $empty1 = []; // moderniji način
    $empty2 = array(); // zastarjeli način ali se koristi

    // In1cijalizacija niza (lista) s podatcima -> Indexed array (sa integerima)
    // index ili kljuc i može biti samo INTEGER ili STRING
    $names1 = ['Alex', 'Filip', 'Marko'];
    $names1 = array('Alex', 'Filip', 'Marko');

    echo '<pre>'; // predformatirani tekst u html ispisu
    // ili desni click i view page source
    print_r( $names1 );
    echo '</pre>';
    echo $names[1];

    // drugi primjer inicijalizacije
    $names1 = ['Alex', 'Filip', 'Marko'];
    $names2 = array('Alex', 'Filip', 'Janko');

    echo '<pre>';
    print_r( $names2 );
    echo '<pre>';
    // echo $names[1] da ispises samo ime Filip


    // Inicijalizacija niza (mapa) s podatcima -> Associative array (sa stringovima)
    $fruits = array(
        'name' => 'Banana', //ovdje je kljuc banana; 
        // => nije operator usporedbe već pridruživanja vrijednosti ključu!
        'cijena' => '12 EUR',
        'klasa' => 'Prva'
    );
    $fruits = [
        'name' => 'Banana',
        'cijena' => '12 EUR',
        'klasa' => 'Prva', // može imati i indeksirani kao [1,2,3]
        // ako dodamo 'name' => jagoda prepisati će tu vrijednost umjesto 'banana'
        // echo 'name' izbacuje jagoda umjesto banana
    ];

    echo '<pre>';
    print_r( $fruits);
    echo '</pre>';

    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    //ako su vitičaste zagrade tretira ga kao OBJEKT
    //nizovi se koriste za navođenje više opcija jedne varijable npr. proizvođači auta
    //nećemo za svaki auto navodiiti jednu varijablu već to prikazati kao array jedne varijable

    echo '-----------------------------------------';
    $imena = [0 => 'Alex', 1 =>'Filip', 2 => 'Marko'];
    echo '<pre>';
    print_r( $imena);
    // ovo se ne koristi da SAMI DEFINIRAMO INDEKSE!
