<?php
//Zad 2.4
$text1 = "   Programuję dobrze  ";
$text2 = "dobrze w PHP.  ";

$len1 = mb_strlen($text1);
$len2 = mb_strlen($text2);

print($len1);
print("\n");
print($len2);

$reversedt2 = strrev($text2);
echo $reversedt2;

$text3 = trim($text1) . trim($text2);

$array = explode(" ", $text3);

$text4 = str_replace("dobrze", "źle", $text1);

echo $text4;

print_r($array);

if($len1 > $len2){
    echo "\ntext1 ma wiecej znakow";
}
else{
    echo "\ntext2 ma wiecej znakow";

}

if (strpos($text2, 'dobrze') === 0) {
    echo "\nZmienna text2 zaczyna się słowem 'dobrze'.\n";
} else {
    echo "\nZmienna text2 nie zaczyna się słowem 'dobrze'.\n";
}

print("\n");
print($text3);

$pos1 = mb_stripos($text2, "PHP");

print("\n");
print($pos1);

$text1Upper = mb_strtoupper($text1);

print("\n");
print($text1Upper);

$text2_ucfirst = ucfirst($text2);
echo "Zmienna text2 z pierwszą literą zmienioną na dużą: $text2_ucfirst\n";

$text2_sub = substr($text2, 8, 3);
echo "Zmienna text2 w zakresie od 9 do 11 pozycji włącznie: $text2_sub\n";

?>