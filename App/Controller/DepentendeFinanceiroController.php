<?php

namespace App\Controller;
use App\DAO\DepartamentoDao;
use App\Model\DependenteFinanceiro;
require_once "../../vendor/autoload.php";

if (isset($_POST['formPost'])== true && $_POST['formPost']=='salvar') {
    $dependenteFinanceiro = new \App\Model\DependenteFinanceiro();
    $dependenteFinanceiro->setNome_dep($_POST['nomeDependente']);    
    $dependenteFinanceiro->setDt_nascimento($_POST['dataNascimento']);    
    $dependenteFinanceiro->setMatriculaEmp($_POST['selectEmp']);    
    $dependenteFinanceiro->setTipo($_POST['selectTipo']);    
 
    $dependenteFinanceiroDao = new \App\DAO\DependenteFinanceiroDAO();
    $dependenteFinanceiroDao->cadastroDepentendeF($dependenteFinanceiro); 
    
    header("Location: ../View/cadastroDependente.php");
}