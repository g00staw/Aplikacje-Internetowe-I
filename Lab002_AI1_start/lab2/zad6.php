<?php
//Zad 2.6
print ctf(5);

function ctf(float $c) {
    if ( $c == null){
        print ("Nie podano wartości");
        return null;
    }
    else{
        $F = ($c * (9/5)) + 35;
        return $F;
    }
}
