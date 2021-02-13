<?php

namespace App\Model;

class Empregado{
    private $matricula, $nome, $rg, $cpf, $endereco, $codDepto;

    public function getCodDepto()
    {
        return $this->codDepto;
    }
 
    public function setCodDepto($codDepto)
    {
        $this->codDepto = $codDepto;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}