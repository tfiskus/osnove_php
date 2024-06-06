
<?php

$podaci = $_POST;

//var_dump($podaci);

if( !empty($podaci) ){
    echo $podaci;

    $ime = $podaci['first_name'];
    $prezime = $podaci['last_name'];

    if (empty($ime)){
        die('Nema podataka.');
    }

    if ($prezime === ''){
        echo 'Nema podataka';
    }
}
?>
