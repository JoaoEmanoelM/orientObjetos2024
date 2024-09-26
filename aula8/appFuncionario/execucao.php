<?php 

require_once('modelo/departamento.php');
require_once('modelo/funcionario.php');

$funcionarios = [];

for($i = 0; $i < 5; $i++){

    $depto = new Departamento();

    $funcionario = new Funcionario();
    $funcionario->setNome(readline("Nome do " . $i + 1 . "° Funcionário: "))
                ->setCargo(readline("Cargo do " . $i + 1 . "° Funcionário: "))
                ->setSalario(readline("Salário do " . $i + 1 . "° Funcionário: "));

    $depto->setNome(readline("Nome do Departamento ao qual o " . $i + 1 . "° funcionário será engajado: "))
          ->setNumeroSala(readline("Numéro da sala do Departamento ao qual o " . $i + 1 . "° funcionário será engajado: "));

    $funcionario->setDepartamento($depto);

    $funcionarios[] = $funcionario;

}

foreach($funcionarios as $key => $funcionario){
    echo $key . "° " . $funcionario;
}