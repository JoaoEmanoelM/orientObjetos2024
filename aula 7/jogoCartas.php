<?php 

class Carta {
    
    private $naipe;
    private $numero;

    
    /**
     * Get the value of naipe
     */
    public function getNaipe()
    {
        return $this->naipe;
    }

    /**
     * Set the value of naipe
     */
    public function setNaipe($naipe): self
    {
        $this->naipe = $naipe;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

}

$naipes = ["Copas", "Espadas", "Ouros" , "Paus"];
$numeros = ["Ás", "Dois", "Três", "Quatro", "Cinco", "Seis", "Sete", "Oito", "Nove", "Dez", "Valete", "Rainha", "Rei"];

foreach($naipes as $i => $nai){
    foreach($numeros as $i => $num){
        $carta = new Carta;
        $carta->setNumero($num);
        $carta->setNaipe($nai);
        $cartas[] = $carta;
    }
}

