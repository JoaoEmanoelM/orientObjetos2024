<?php

$n1 = readline("fale o multiplicador: ");
$n2 = readline("fale o multiplicando: ");

$num = 0;

for($i = $n1; $i > 0; $i--){
    $num += $n2;
}

echo "$num \n";