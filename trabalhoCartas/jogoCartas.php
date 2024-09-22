<?php

class Carta {
    private string $nome;
    private string $numero;
    private string $caracteristica;
    private string $dica1;
    private string $dica2;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function setNumero(string $numero): self {
        $this->numero = $numero;
        return $this;
    }

    public function getCaracteristica(): string {
        return $this->caracteristica;
    }

    public function setCaracteristica(string $caracteristica): self {
        $this->caracteristica = $caracteristica;
        return $this;
    }

    public function getDica1(): string {
        return $this->dica1;
    }

    public function setDica1(string $dica1): self {
        $this->dica1 = $dica1;
        return $this;
    }

    public function getDica2(): string {
        return $this->dica2;
    }

    public function setDica2(string $dica2): self {
        $this->dica2 = $dica2;
        return $this;
    }

    public function getDicaAleatoria(): string {
        return rand(0, 1) ? $this->dica1 : $this->dica2;
    }

    public function __toString() {
        return "{$this->nome} {$this->caracteristica}";
    }
}

$nomes = ["Dragão", "Tigre", "Lobo", "Águia", "Leão", "Fênix", "Pantera", "Lince"];
$caracteristicas = ["Radiante", "Searing", "Solar", "Dourada", "Incandescente", "Flamejante", "Brilhante", "Eterno"];
$dicasNomes = [
    "Esse animal cospe fogo e voa.",
    "Esse animal é um predador ágil e forte.",
    "Esse animal é um excelente caçador, conhecido por sua visão aguçada.",
    "Esse animal simboliza a coragem e a realeza.",
    "Esse animal é o rei da selva, possui um rugido poderoso.",
    "Esse animal é conhecido por simbolizar perseverança e renascimento.",
    "Esse animal é ágil e discreto, caça à noite.",
    "Esse animal é famoso por sua velocidade e graça."
];

$dicasAdjetivos = [
    "Esse animal possui uma característica que brilha intensamente.",
    "Esse animal possui uma característica que queima com grande intensidade.",
    "Esse animal possui uma característica relacionada à luz do sol, simbolizando calor e energia.",
    "Esse animal possui uma característica que sugere riqueza e nobreza.",
    "Esse animal possui uma característica ardente e poderosa.",
    "Esse animal possui uma característica de brilho intenso e atraente.",
    "Esse animal possui uma característica duradoura e imortal.",
    "Esse animal possui uma característica vibrante e cheia de vida."
];

$animais = [];

for ($i = 0; $i < 8; $i++) {
    $animal = new Carta();
    $animal->setNome($nomes[$i])
           ->setNumero((string)($i + 1))
           ->setCaracteristica($caracteristicas[$i])
           ->setDica1($dicasNomes[$i])
           ->setDica2($dicasAdjetivos[$i]);

    $animais[] = $animal;
}

$key = rand(0, 7);
$tentativas = 0;

imprimirCartas($animais, $tentativas, $key);

function imprimirCartas($animais, $tentativas, $key) {

    echo "Cartas disponíveis:\n";
    
    foreach ($animais as $pos => $animal) {
        echo $pos + 1 . "° Carta: " .$animal . "\n";
    }

    $escolha = null;

    if ($tentativas > 0) {
        echo "Escolha uma opção:\n";
        echo "1- Tentar adivinhar\n";
        echo "2- Dica\n";
        echo "3- Desistir\n";

        $escolha = (int)readline("Digite sua escolha: ");

        switch ($escolha) {
            case 1:
                $animalEscolhido = (int)readline("Tente adivinhar a carta escolhida: ");
                if ($animalEscolhido - 1 == $key) {

                    echo "Parabéns, você acertou a carta!\n";
                    echo "Sua pontuação foi: " . 100 - $tentativas * 5; 


                    return;
                } else {
                    echo "Errado! Tente novamente.\n";
                }
                break;
            case 2:
                echo "Dica: " . $animais[$key]->getDicaAleatoria() . "\n";
                break;
            case 3:
                echo "Você desistiu.\n";
                return;
            default:
                echo "Escolha inválida.\n";
                break;
        }
    }
    else{
    $animalEscolhido = (int)readline("Tente adivinhar a carta escolhida: ");
                if ($animalEscolhido - 1 == $key) {

                    echo "Parabéns, você acertou a carta!\n";
                    echo "Sua pontuação foi: " . 100 - $tentativas * 5; 

                    return;
                } else {
                    echo "Errado! Tente novamente.\n";
                }
    }

    $tentativas++;
    array_splice($animais, $escolha, 1);

    $key --;

    imprimirCartas($animais, $tentativas, $key);    
}
