<?php 
namespace App\Model;

class Projeto {
    private $codigoProjeto, $descricaoProjeto, $codigoDepartamento;

    public function getCodigoProjeto()
    {
        return $this->codigoProjeto;
    }

    public function setCodigoProjeto($codigoProjeto)
    {
        $this->codigoProjeto = $codigoProjeto;

        return $this;
    }

    public function getDescricaoProjeto()
    {
        return $this->descricaoProjeto;
    }

    public function setDescricaoProjeto($descricaoProjeto)
    {
        $this->descricaoProjeto = $descricaoProjeto;

        return $this;
    }

    public function getCodigoDepartamento()
    {
        return $this->codigoDepartamento;
    }

    public function setCodigoDepartamento($codigoDepartamento)
    {
        $this->codigoDepartamento = $codigoDepartamento;

        return $this;
    }
}
