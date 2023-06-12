<?php

namespace App\Entity;


class Funcionario
{
    private $nome;
    private $dataDeNascimento;
    private $dataDeEntrada;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataDeNascimento() {
        return $this->dataDeNascimento;
    }

    public function setDataDeNascimento($dataDeNascimento) {
        $this->dataDeNascimento = $dataDeNascimento;
    }

    public function getDataDeEntrada() {
        return $this->dataDeEntrada;
    }

    public function setDataDeEntrada($dataDeEntrada) {
        $this->dataDeEntrada = $dataDeEntrada;
    }

    public function getTempoNaEmpresa()
    {
        $hoje = new \DateTime();
        $diferenca = $hoje->diff($this->dataDeEntrada);

        return $diferenca;
    }
}