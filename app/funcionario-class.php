<?php

class Funcionario {
    private $matricula;
    private $nome;
    private $cpf;
    private $salario;

    public function __construct(
        String $matricula,
        String $nome,
        String $cpf,
        Float  $salario)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula(String $matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(String $nome) {
        $this->nome = $nome;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF(String $cpf) {
        $this->cpf = $cpf;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario(Float $salario) {
        $this->salario = $salario;
    }
}