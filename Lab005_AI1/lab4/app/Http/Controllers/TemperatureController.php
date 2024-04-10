<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function ctf(float $c = 0)
    {
        dump($c); // Wyświetli wartość $c

        if(request()->route('c') === null){
            echo "Nie podano wartości";
        }
        else{
            $f = $c*9/5 + 32;
            dd($f); // Wyświetli wartość $f i zakończy wykonywanie skryptu
        }
    }
}
