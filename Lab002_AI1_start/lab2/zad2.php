<?php
//Zad 2.2
$a = 4;
define('B', 10);
$c = 4.0;
$d = 5.667;

printf ("Dodawanie a + b = %d".PHP_EOL, $a + B);

printf ("Dzielenie a / b = %d".PHP_EOL, $a / B);

$mod = B % $a;

printf ("Reszta z dzielenia B przez a = %d".PHP_EOL, $mod);

if( $a == B){
    print("a ma taką samą wartość jak B");
}
else{
    print("a nie ma takiej samej wartości jak B");
}

if( $a > B){
    printf("\na jest większe od B");
}
else{
    print("\na nie jest większe od B");
}

print("\n");

if( $a == $c){
    print("a ma taką samą wartość jak c");
}
else{
    print("a nie ma takiej samej wartości jak c");
}

print("\n");

if( $a === $c){
    print("a ma taką samą wartość oraz typ jak c");
}
else{
    print("a nie ma takiej samej wartości oraz typu jak c");
}

print("\n");

printf("%d", $d);

$d_round = round($d, 2);
echo "\nd zaokrąglone do 2 miejsc po przecinku wynosi: $d_round\n";
?>

?>