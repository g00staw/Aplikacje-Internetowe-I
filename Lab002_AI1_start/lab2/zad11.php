<?php
//Zad 2.11

function division($x, $y){

    if (!is_int($x) || !is_int($y)) {
        throw new Exception("Oba parametry muszą być liczbami całkowitymi");
    }

    if($y == 0){
        throw new Exception("Nie można dzielić przez zero");
    }
    else{
        $result = $x / $y;
    }

    return $result;
}


try{
    $test = division(5.34, 0.234);
}
catch(Exception $e){
    echo 'Wystąpił błąd: ',  $e->getMessage(), "\n";
}

?>
