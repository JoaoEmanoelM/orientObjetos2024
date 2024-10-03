<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pratos = array();

$pratos[] = criarPrato(1,"Camarão à Milanesa", 110.00);
$pratos[] = criarPrato(2, "Pizza Margherita", 80.00);
$pratos[] = criarPrato(3, "Macarrão à Carbonara", 60.00);
$pratos[] = criarPrato(4, "Bife à Parmegiana" , 75.00);
$pratos[] = criarPrato(5, "Risoto ao Funghi", 70.00);

function criarPrato(int $numero, string $nome, float $valor){
    for($i = 0; $i < 5; $i++){
        $prato = new Prato();
        $prato->setNome($nome);
        $prato->setValor($valor);
        $prato->setNumero($numero);
    }

    return $prato;
}
$pedidos = [];
$escolha = null;

do {
    echo "--------Menu--------\n";
    echo "1- Cadastrar pedido-\n";
    echo "2- Cancelar pedido--\n";
    echo "3- Listar pedidos---\n";
    echo "4- Total de Vendas--\n";
    echo "0-------Sair--------\n";

    $escolha = readline("Escolha uma das opções acima: ");
    system('clear');
    

    switch($escolha){
        case 1:
            
            $pratoEscolhido = null;
            
            $pedido = new Pedido;
            $pedido->setNomeCliente(readline("Nome do cliente: "));
            $pedido->setNomeGarcom(readline("Nome do garçom: "));
            $numPratoEscolhido = readline("Número do prato escolhido: ");
            foreach($pratos as $prato){
                if($prato->getNumero() == $numPratoEscolhido){
                    $pratoEncontrado = $prato;
                    break;
                }
            }

            if($pratoEncontrado){
                echo "Pedido Cadastrado com sucesso!\n";
                $pedido->setPrato($pratoEncontrado);
                $pedidos[] = $pedido;
            }
            else{
                echo "Número do prato inválido!\n";
            }

            
            
        break;

        case 2:


            foreach($pedidos as $key => $pedido){
                echo $key + 1 . "° " . $pedido;
            }
        
            $deletarPrato = readline("Digite o número do pedido que você quer cancelar: ");
            array_splice($pedidos, $deletarPrato - 1, 1);

            echo "Pedido cancelado com sucesso! \n";

        break;
        
        case 3: 

            if($pedidos == null){
                echo "Nenhum pedido cadastrado!\n";
            }
            else{
                foreach($pedidos as $key => $pedido){
                    echo $key + 1 . "° pedido: " . $pedido . "\n";
                }
            }

            readline(" ");

            system('clear');

        break;

        case 4: 

            $totalVendas = 0;
            foreach($pedidos as $pedido){
                $totalVendas += $pedido->getPrato()->getValor();
            }
            echo "Valor total de vendas: R$$totalVendas\n";

        break;

        case 0:

            echo "Encerrando o programa...\n";

        
        }

        

}while($escolha != 0);