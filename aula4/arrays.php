<?php 

    $setup = array("monitor", "teclado","mouse","gabinete","cadeira");
    $nomes = array("João", "Maria", "Pedro", "Daniel", "Felipe");
    $marcas = array("Nike", "Adidas", "Lacoste", "Olimpikus", "Tommy Hilfiger");
    $filmsOrSeries = array("Forrest Gump", "Rocky", "Django", "Aot", "Modern Family");

    function imprimirArray($array){
        foreach ($array as $pos) {
            echo " $pos |";
        }
        echo "\n";
    }
    
    imprimirArray($setup);
    imprimirArray($nomes);
    imprimirArray($marcas);
    imprimirArray($filmsOrSeries);
