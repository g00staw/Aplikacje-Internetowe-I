<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

printf(" | foreach {} | ");

//Wyświetlenie owoców z pętlą foreach z { }

foreach($fruits as $fruit){
    printf("%s ", $fruit);
}



//Wyświetlenie owoców z pętlą foreach z endforeach

printf(" | endforeach | ");

foreach($fruits as $fruit):
    printf("%s ", $fruit);
endforeach;


?>