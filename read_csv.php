<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if((handle === ($handle = fopen(USERS_CSV, 'r')) !== false) {

if(false !== ($handle = fopen(USERS_CSV, 'r')) {
    
    $data = [];
    while(fgetcsv($handle) !== false) {
        $data[] = $row;
    }
} else {
    echo 'Unable to open the file.';
} 