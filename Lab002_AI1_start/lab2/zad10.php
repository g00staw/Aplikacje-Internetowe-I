<?php
//Zad 2.10
$people = [
    "Jan" => "45 lat",
    "Bartosz" => "38 lat",
    "Piotr" => "40 lat"
];

print_r($people);

print(count($people));

print("\n");
print($people["Bartosz"]);

$people["Witold"] = "28 lat";

print_r($people);

unset($people["Piotr"]);

arsort($people);

print_r($people)
?>
