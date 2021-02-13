<?php

namespace App\DAO;
use \App\Config\Conexao;
use \App\Model\Departamento;

    class DepartamentoDao
    {

        public function cadastroDepartamento(Departamento $departamento){
            $sqlCadastroDep = "INSERT INTO depto (nome, endereco) VALUES (?, ?)";
            $smtp = Conexao::getConexaoBD()->prepare($sqlCadastroDep);
            $smtp->bindValue(1, $departamento->getNomeDepartamento());
            $smtp->bindValue(2, $departamento->getEnderecoDepartamento());
            $smtp->execute();
        }

        public function listagemDepartamento(){
            $sqlDepartamento = "SELECT * FROM depto";
            $smtp = Conexao::getConexaoBD()->prepare($sqlDepartamento);
            $smtp->execute();
            $numRows = $smtp->rowCount();
            if ($numRows > 0) {
                $returnArray = $smtp->fetchAll(\PDO::FETCH_ASSOC);
                return $returnArray;
            }else{
                return [];
            }
        }

        public function listagemDepartamentoRelatorio(){
            $sqlDepartamento = "SELECT Count(d.cod_depto) as qtde, d.nome FROM depto d
                                JOIN empregado e
                                ON d.cod_depto = e.cod_depto
                                GROUP BY d.cod_depto";
            $smtp = Conexao::getConexaoBD()->prepare($sqlDepartamento);
            $smtp->execute();
            $numRows = $smtp->rowCount();
            if ($numRows > 0) {
                $returnArray = $smtp->fetchAll(\PDO::FETCH_ASSOC);
                return $returnArray;
            }else{
                return [];
            }
        }

        public function listagemDepartamentoporCod(Departamento $departamento){
            $sqlDepartamento = "SELECT * FROM depto WHERE cod_depto = ?";
            $smtp = Conexao::getConexaoBD()->prepare($sqlDepartamento);
            $smtp->bindValue(1, $departamento->getCodigoDepartamento());
            $smtp->execute();
            $returnArray = $smtp->fetchAll(\PDO::FETCH_ASSOC);
            return $returnArray;
        }

        public function excluirDepartamento(Departamento $departamento){
            $sqlExcluirDepartamento = "DELETE FROM depto WHERE cod_depto = ?";
            $smtp = Conexao::getConexaoBD()->prepare($sqlExcluirDepartamento);
            $smtp->bindValue(1, $departamento->getCodigoDepartamento());
            $smtp->execute();
        }

        public function editarDepartamento(Departamento $departamento){
            $sqlEditarDepartamento = "UPDATE depto SET nome = ?, endereco = ? WHERE cod_depto = ?";
            $smtp = Conexao::getConexaoBD()->prepare($sqlEditarDepartamento);
            $smtp->bindValue(1, $departamento->getNomeDepartamento());
            $smtp->bindValue(2, $departamento->getEnderecoDepartamento());
            $smtp->bindValue(3, $departamento->getCodigoDepartamento());
            $smtp->execute();
        }

    }
