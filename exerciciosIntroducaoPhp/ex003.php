<?php 

$dataInicio = 1980;
$dataFim = 2024;

for($i = $dataInicio; $i <= $dataFim; $i ++){
    if($i % 4 == 0 && $i % 100 != 0 or $i % 400 == 0){
        echo "$i \n";
    }
}
