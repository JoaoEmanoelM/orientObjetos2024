<?php

class Receita{

    private string $descricao;
    private float $valor;

    public function getDescricao(): string
    {
        return $this->descricao;
    }


    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function __toString(){
        
        return (" Entrada: $this->descricao | Valor entrada: $this->valor | \n");

    }

}
class Despesa{

    private string $descricao;
    private float $valor;

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function __toString(){
        
        return (" Saida: $this->descricao | Valor saida: $this->valor | \n");

    }

}

$receitas = [];
$despesas = [];
$receitasTotais = 0;
$despesasTotais = 0;

do{

    echo "--------Menu---------\n";
    echo "1- Adicionar receita:\n";
    echo "2- Adicionar despesa:\n";
    echo "3- Listar receitas:\n";
    echo "4- Listar despesas:\n";
    echo "5- Sumarizar:\n";

    $opcao = readline("Escolha uma opção: ");

    echo "0\33c";
    switch($opcao){
        case 1: 

            $receitaAdc = new Receita();
            $receitaAdc->setDescricao(readline("Fale a origem da receita a ser adicionada: "));
            $receitaAdc->setValor(readline("Fale o valor da receita a ser adicionada: "));
            $receitas[] = $receitaAdc;

            echo "0\33c";
            break;

        case 2: 

            $despesasAdc = new Despesa();
            $despesasAdc->setDescricao(readline("Fale o direcionamento da receita a ser removido: "));
            $despesasAdc->setValor(readline("Fale o valor da receita a ser removida: "));
            $despesas[] = $despesasAdc;

            echo "0\33c";

            break;

        case 3:
            foreach($receitas as $pos => $cont){
                echo $pos + 1 . "°" . $cont;
            }

            readline();
        
            echo "0\33c";
    
            break;
        case 4:
            foreach($despesas as $pos => $cont){
                echo $pos + 1 . "°" . $cont;
            }

            readline();
        
            echo "0\33c";

            break;
        case 5:   
            
            foreach($despesas as $p){
                $despesasTotais += $p->getValor();
            }
            foreach($receitas as $p){
                $receitasTotais += $p->getValor();
            }

            echo "Saldo: R$" . $receitasTotais - $despesasTotais. "\n";
            echo "Total de receitas: R$" . $receitasTotais . "\n";
            echo "Total de despesas: R$" . $despesasTotais . "\n";

            readline();
        
            echo "0\33c";

            break;

            case 0:

        echo "encerrando programa...";
        break;
    }

}while($opcao != 0);