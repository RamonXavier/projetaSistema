<?php

namespace App\Controller;
use \App\DAO\ProjetoDAO;
use \App\Model\Projeto;
require_once "../../vendor/autoload.php";

if (isset($_POST['formPost'])== true && $_POST['formPost']=='salvar') {
    $projeto = new \App\Model\Projeto();
    $projeto->setDescricaoProjeto($_POST['descProj']);    
    $projeto->setCodigoDepartamento($_POST['selectDep']);    

    $projetoDao = new \App\DAO\ProjetoDAO();
    $projetoDao->cadastroProjeto($projeto);
    header("Location: ../View/cadastroProjeto.php");
}

if (isset($_POST['formPost'])== true && $_POST['formPost']=='listar') {
    $projetoDao = new \App\DAO\ProjetoDAO();
    $listagemProjetos = $projetoDao->ListarProjeto();
    return $listagemProjetos;
}

if (isset($_GET['formGet'])== true && $_GET['formGet']=='excluir') {
    $projeto = new \App\Model\Projeto(); 
    $projeto->setCodigoProjeto($_GET['codigo']);    

    $projetoDao = new \App\DAO\ProjetoDAO();
    $projetoDao->excluirProjeto($projeto);
    header("Location: ../View/relatorioProjeto.php");
}

if (isset($_GET['formGet'])== true && $_GET['formGet']=='alterar') {
    $projeto = new \App\Model\Projeto(); 
    $projeto->setCodigoProjeto($_GET['codigo']);    

    $projetoDao = new \App\DAO\ProjetoDAO();
    $projetoEditar = $projetoDao->ListarProjetoPorCodigo($projeto);
    return $projetoEditar;
}

if (isset($_POST['formPost'])== true && $_POST['formPost']=='editar') {
    $projeto = new \App\Model\Projeto();
    $projeto->setDescricaoProjeto($_POST['descProj']);    
    $projeto->setCodigoDepartamento($_POST['selectDep']);    
    $projeto->setCodigoProjeto($_POST['codigo']);    

    $projetoDao = new \App\DAO\ProjetoDAO();
    $projetoDao->cadastroProjeto($projeto);
    header("Location: ../View/relatorioProjeto.php");
}