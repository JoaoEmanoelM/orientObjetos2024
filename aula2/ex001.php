<?php

$luigu[0] = readline("escreva um número: ");

for($luisgustavo = 1; $luisgustavo <= 10; $luisgustavo ++){
    $luigu[$luisgustavo] = readline("escreva mais um número: ");
}

echo"\033c";

for($luisgustavofidelis = 0; $luisgustavofidelis < 10; $luisgustavofidelis ++){
    if($luigu[$luisgustavofidelis] > 0){
        echo "$luigu[$luisgustavofidelis] é positivo \n";
    }
    else{
        echo "$luigu[$luisgustavofidelis] é negativo \n";
    }
}
