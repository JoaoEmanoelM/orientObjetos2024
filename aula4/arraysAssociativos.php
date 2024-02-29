<?php

    $cadastro = array('pessoa1' => array("Manuel de Medeiros", "Rua das Acácias", "Foz do iguaçu", "PR" ), 
                      'pessoa2' => array("Juliana de Amaral", "Rua dos Pinheiros", "Florianópolis", "SC", ),
                      'pessoa3' => array("Rodrigo Baidek","Rua Dom Pedro I",  "Petrópolis","RJ"),
                      'pessoa4' => array("Fabíola da Silva", "Rua Chile", "Guarulhos", "SP"));

    foreach ($cadastro as $key => $pos){

        for ($i=0; $i < 4; $i++) { 
            echo "$pos[$i] |";
        }

        echo "\n";
    }