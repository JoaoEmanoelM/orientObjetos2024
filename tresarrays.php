<?php

function fahrenheit($x){
    $x = $x * 1.8 + 32;

    return $x;
}
function fatorial($x){
    for($i = $x; $i > 0; $i--){
        $x *= $i;
    }
}
function equacao($x){
    $x = (($x * $x) + (2 * $x) + 4) / (2 * $x);
    return $x;
}
function imprimirArray($array){
    foreach($array as $pos){
        echo "$pos \n";
    }
}

$vetorFahrenheit = array();
for($i = 0; $i < 5; $i++){

    $vetor[$i] = readline("me fale um número: ");

}

foreach($vetor as $key => $pos){
    $vetorFahrenheit[$key] = fahrenheit($pos);
    $vetorFatorial[$key] = fatorial($pos);
    $vetorEquacao[$key] = equacao($pos);
}

imprimirArray($vetorFahrenheit);
imprimirArray($$vetorFatorial);
imprimirArray($vetorEquacao);
