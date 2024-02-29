<?php

$num = 0;

while($num != 1){

    $num = readline("me fale um número e eu te direi se ele é primo ou não: ");

    testePrimos($num);

    }

    function testePrimos($num){

        for($i=2; $i < $num; $i++)
            if($num % $i == 0){  
            echo "$num não é primo, pois é multiplo de $i \n";

        break;
        }
        else{
         
        echo "$num é um número primo \n";

        break;
        }

        
    }

    echo "0\33c";
    echo "programa encerrado. \n";