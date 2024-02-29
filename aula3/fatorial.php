<?php

$num = readline("me fale um número q eu irei te mostra o seu fatorial: ");
$numFatorado = $num; 

$numFatorado = fatorial($num, $num);

echo "$numFatorado \n";

function fatorial($num, $numFatorado){
for($i = $num - 1; $i > 0; $i--){
    $numFatorado *= $i; 

    return $numFatorado;
}
}

