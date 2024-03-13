<?php
//Zad 2.9

$array = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];
print(count($array));

print("\n");
print_r($array);

array_push($array, "lemon");

print_r($array);

$lemon = "lemon";
$lemon = array_pop($array);

print_r($array);

asort($array);

print_r($array);
?>

