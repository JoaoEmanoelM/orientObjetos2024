<?php 

require_once("modelo/Carro.php");
require_once("modelo/Fabricante.php");

$fabricante1 = new Fabricante();
$fabricante1->setNome("Volkswagem")
            ->setSigla("VW");

$fabricante2 = new Fabricante();
$fabricante2->setNome("Chevrolet")
            ->setSigla("GM");

$fabricante3 = new Fabricante();
$fabricante3->setNome("Fiat")
            ->setSigla("F");

$fabricante4 = new Fabricante();
$fabricante4->setNome("Renault")
            ->setSigla("RN");

$fabricantes = [$fabricante1, $fabricante2, $fabricante3, $fabricante4];

$carros = [];

$escolha = null;

do {
    echo "--------Menu-------\n";
    echo "1- Cadastrar carro-\n";
    echo "2- Excluir carro---\n";
    echo "3- Listar carro----\n";
    echo "4-------Sair-------\n";

    $escolha = readline("Escolha uma das opções acima: ");
    system('clear');

    switch($escolha){
        case 1:

            $carro = new Carro();
            $carro->setModelo(readline("Modelo do Carro: "))
                  ->setAnoFabricacao(readline("Ano de Fabricação: "));

                
            $sigla = readline("Digite a sigla do fabricante: ");

            $fabricanteExiste = false;

            foreach($fabricantes as $fabricante){
                if($fabricante->getSigla() == $sigla){
                    $fabricanteExiste = true;
                }
            }

            if($fabricanteExiste){
                $carro->setFabricante($fabricante);
                $carros[] = $carro;
            }else{
                echo "Envie um fabricante existente! \n";
            }

        break;

        case 2:

            foreach($carros as $key => $carro){
                echo $key + 1 . "° " . $carro;
            }
        
            $opcaoCarro = readline("Escolha o carro que você deseja apagar: ");
            array_splice($carros, $opcaoCarro - 1, 1);
            
        break;
        
        case 3: 

            foreach($carros as $key => $carro){
                echo $key + 1 . "° " . $carro;
            }

            $nada = readline("ENTER para continuar");
            system('clear');
        
        break;

        case 4: 

            $escolha = 0;

            echo "Saindo do programa...";

        break;

        }

}while($escolha != 0);
