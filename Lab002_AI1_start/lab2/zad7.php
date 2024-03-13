<?php
//Zad 2.7
$l = 10;

function rd(&$l) {
    $l = rand(1, 50);
}

rd($l);

echo "Nowa wartość l: $l\n";
?>