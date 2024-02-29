<?php
    function imparPar($num){

    if($num % 2 == 0){
        $par = true;
    }else{
        $par = false;
    }

    return $par;
}

//programa principal

$num = readline("me fale um número: ");

$par = imparPar($num);

if($par){
    echo "é par \n";
}else{
    echo "é impar \n";
}