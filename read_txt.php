<?php

const FILE_PATH = __DIR__ . '/podaci/polaznici.txt';


try {

    if(file_exists(FILE_PATH)){

    }

    if(false !== $pointer = fopen(FILE_PATH, 'r')){
        while (false !== $line = fgets($pointer)) {
            echo $line;
        }
    
        fclose($pointer);
    }else{
        echo 'Unable to open the file.';
    }
} catch (\Throwable $th) {
    //throw $th;
}

