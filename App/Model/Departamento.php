<?php
namespace App\Model;

class Departamento{
    private $codigoDepartamento, $enderecoDepartamento, $nomeDepartamento;

    public function getEnderecoDepartamento()
    {
        return $this->enderecoDepartamento;
    }

    public function setEnderecoDepartamento($enderecoDepartamento)
    {
        $this->enderecoDepartamento = $enderecoDepartamento;

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

    public function getNomeDepartamento()
    {
        return $this->nomeDepartamento;
    }

    public function setNomeDepartamento($nomeDepartamento)
    {
        $this->nomeDepartamento = $nomeDepartamento;

        return $this;
    }
}