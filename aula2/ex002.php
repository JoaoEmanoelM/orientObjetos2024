<?php

$num = readline("me fale um número: ");

echo "os antecessores de $num são: ";

for($i = $num - 1; $i >= 1 ; $i--){
    echo "$i, ";
}
echo $i . "\n";