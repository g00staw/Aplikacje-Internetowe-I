<?php
//Zad 2.12

setlocale(LC_TIME, 'pl_PL');
date_default_timezone_set("Europe/Warsaw");

echo date('l, d-m-Y') . "\n";

echo date('Y-F-d H:i') . "\n";

$data1 = new DateTime();
$data2 = new DateTime('2021-03-12');
$diff = $data1->diff($data2);
echo $diff->days . " dni\n";

$now = new DateTime();
$seven = new DateTime('07:00:00');
if ($now < $seven) {
    $diff = $seven->diff($now);
} else {
    $diff = $now->diff($seven);
}
echo $diff->format('%h godzin %i minut') . "\n";

$data3 = new DateTime('2023-04-01');
if ($data1 < $data3) {
    echo "Data dzisiejsza jest wcześniejsza\n";
} else {
    echo "1 kwietnia 2023 roku jest wcześniejsza\n";
}
?>