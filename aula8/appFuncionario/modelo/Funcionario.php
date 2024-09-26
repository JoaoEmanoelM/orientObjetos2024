<?php

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $departamento;

    

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of departamento
     */
    public function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     */
    public function setDepartamento(Departamento $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function __toString(){
        
        return " Funcionário: \n"
        .   " \nNome: $this->nome \n" . "Cargo: $this->cargo \n" . "Salario: $this->salario \n" . "Informações departamento: \n" . $this->departamento  ;

    }
}