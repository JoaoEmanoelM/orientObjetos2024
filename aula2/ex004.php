<?php

$num = readline("Me fale um número: ");

if($num > 0){
    echo "$num é um número positivo, e seu dobro é " . $num * 2 . "\n";
}elseif($num < 0){
    echo "$num é um número negativo, e seu triplo é " . $num * 3 . "\n";
}else{
    echo "o número é 0, qualquer multiplicação feita com ele sempre resultará em 0 \n";
}