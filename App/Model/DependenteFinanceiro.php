<?php

namespace App\Model;

class DependenteFinanceiro{
    private $matriculaEmp, $codDependente, $nome_dep, $dt_nascimento, $tipo;

    public function getMatriculaEmp()
    {
        return $this->matriculaEmp;
    }

 
    public function setMatriculaEmp($matriculaEmp)
    {
        $this->matriculaEmp = $matriculaEmp;

        return $this;
    }

    public function getCodDependente()
    {
        return $this->codDependente;
    }

    public function setCodDependente($codDependente)
    {
        $this->codDependente = $codDependente;

        return $this;
    }
 
    public function getNome_dep()
    {
        return $this->nome_dep;
    }
 
    public function setNome_dep($nome_dep)
    {
        $this->nome_dep = $nome_dep;

        return $this;
    }

  
    public function getDt_nascimento()
    {
        return $this->dt_nascimento;
    }

    public function setDt_nascimento($dt_nascimento)
    {
        $this->dt_nascimento = $dt_nascimento;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}