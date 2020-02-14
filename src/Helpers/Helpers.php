<?php

if(!function_exists('custom_function')){
    function custom_function(){

        $primero = 10;
        $segundo = 25;
        $totalSuma =  $primero +$segundo;
        return 'custom function '. $totalSuma;
    }
}

$arr = array("Me ", "gusta ", "mucho ", "el ", "Chocolate ");
$val = -6;

function headliner($text){
    return "<h1>$text</h1>";
}

function prettyArray($a)
{
    echo"<pre>";
    print_r($a);
    echo"</pre>";
}

echo headliner("Vamos a ponerlo bonito");
prettyArray($arr);