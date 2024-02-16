<?php
    for ($i = 0; $i < 5; $i++){
        $nome = readline("Diga seu nome: ");
        $peso = readline("Diga seu peso em Kg: ");
        $altura = readline("Diga sua altura em metros: ");

        $aa = $altura * $altura;
        $imc = $peso / $aa;
        round($imc, 2);
        echo $nome. ' tem peso '. $peso. ', altura '. $altura. ', e IMC '. $imc. "\n";

        echo "\033c";
    }