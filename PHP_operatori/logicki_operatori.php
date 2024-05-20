<?php

$a = 10;
$b = 0;

//prazni string se evaluira kao false isto kao i nula

// type casting / convert / promjena tipa
(string)$a;

var_dump(  (bool)$a   );
var_dump(  boolval($b)   );

var_dump( !$a ); //false

//operator && zahtijeva da su svi izrazi istiniti kako bi vratio true
var_dump($a && $b); //false
var_dump( ($a > $b)  && ($b == $a) ); //false
var_dump(false && true); //false
var_dump(true && false); //false
var_dump(false && false); //false
var_dump(true && true); //false


//operator || zahtijeva da je bar jedan izraz istinit kako bi vratio true; || označava OR/ili
var_dump($a || $b);
var_dump(false || true); //true
var_dump(true || false); //true
var_dump(true || true); //true
var_dump(false || false); //false

//da bi smio raditi u HR mora biti ili drzavljanin ili imati stalni boravak ili radnu dozvolu