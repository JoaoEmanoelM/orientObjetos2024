<?php
function areaCirculo($pi, $raio){
    $area = $raio * 2 * $pi;
    return $area;
}
function circuferenciaCirculo($pi, $raio){
    $circuferencia = $pi * 2 * $raio;
    return $circuferencia;    
}

$x = 0;

while($x < 3){

    $raio = readline("me fale o raio do circulo: ");

    $area = areaCirculo(3.14,$raio);

    echo "a área do círculo é $area \n";

    $circuferencia = circuferenciaCirculo(3.14, $raio);

    echo "a circuferência do círculo é $circuferencia \n";

    $x ++;

}